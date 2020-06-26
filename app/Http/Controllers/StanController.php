<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Stan;
use App\Fotografija as Foto;
use App\Ugovor;
use App\Komentar;

class StanController extends Controller
{
    public function index(){


        $stanovi = Stan::orderBy('created_at','desc')->paginate(6);
        $i = 0;
        foreach($stanovi as $stan) {
            $foto = null;
            $foto = Foto::where('id_stan', $stan->id)->get();
            $marko = null;


            $j = 0;

            foreach($foto as $f){
                $marko[$j] = $f->putanja;
                $j++;
            }

            $stan->putanja = $marko;
            $marko = null;
            $i++;
        }

        return view('stanovi.index',['stanovi' => $stanovi]);
    }

    public function show($id){

        $stan1 = Stan::where('id',$id)->get();
        $stan = $stan1[0];

        $foto = Foto::where('id_stan', $stan->id)->get();
        $putanje = null;
        $j = 0;
        foreach($foto as $f){
            $putanje[$j] = $f->putanja;
            $j++;
        }

        $stan->putanja = $putanje;
        $putanje = null;

        //ovo sam nadoda da uzme samo 3
        $komentari = Komentar::where('id_stan', $stan->id)->take(3)->get();//->paginate(1);
        $users = DB::table('users')->get();

        return view('stanovi.show', [
            'id' => $id,
            'stan'=> $stan,
            'komentari' => $komentari,
            'users' => $users
        ]);
    }

    public function create(){
        return view('stanovi.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'naziv' => 'required',
            'lokacija' => 'required',
            'kvadratura' => 'required',
            'cijena_stana' => 'required',
            'opis' => 'required',
            'fotografija' => 'nullable',
        ]);


        $img = $request->file('fotografija');

        $stan = new Stan;
        $stan->naziv = request('naziv');
        $stan->internet = TRUE;
        $stan->lokacija = request('lokacija');
        $stan->kvadratura = request('kvadratura');
        $stan->broj_soba = 2;
        $stan->cijena_stana = request('cijena_stana');
        $stan->opis = request('opis');

        $stan->save();

        $id = $stan->id;

        if ($request->hasFile('fotografija')){
            $duljina = count($img);
            for($i = 0; $i < $duljina; $i++){
                $foto = new Foto();
                $filenameWithExt = $img[$i]->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $fileext = $img[$i]->getClientOriginalExtension();
                $filenameToStore[$i] = $filename.'_'.time().'.'.$fileext;
                $path = $img[$i]->storeAs('public/fotografija',$filenameToStore[$i]);

                $foto->putanja = $filenameToStore[$i];
                $foto->id_stan = $id;

                $foto->save();
            }
        }


        return redirect('/');
    }

    public function edit($id){
        $stan = Stan::find($id);
        return view('stanovi.edit',['stan' => $stan]);
    }

    public function update($id){

        $stan = Stan::find($id);
        $stan->lokacija = request('lokacija');
        $stan->kvadratura = request('kvadratura');
        $stan->broj_soba = request('brojsoba');
        $stan->cijena_stana = request('cijena');

        $stan->save();

        return redirect('/stan');

    }

    public function destroy($id){
        $stan = Stan::find($id);
        $foto = Foto::where('id_stan', $stan->id)->get();

        if (!$foto->isEmpty()) {

            $j = 0;
            foreach($foto as $f){
                echo $f->putanja;
                Storage::delete('public/fotografija/'.$f->putanja);
                $f->delete();
                $j++;
            }
        }

        $stan->delete();
        return redirect('/');
    }

    public function rezerviraj($id, Request $request){
        $stan = Stan::find($id);
        $id = Auth::id();
        $ugovor = Ugovor::where('id_stan',$stan->id)->get();




        $this->validate($request, [
            'date-in' => 'required',
            'date-out' => 'required'
        ]);

        $datein =  request('date-in');
        $dateout =  request('date-out');
        $datetime1 = new DateTime($datein);
        $datetime2 = new DateTime($dateout);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $zauzet = FALSE;

        if($id){
            if(request('date-in') < request('date-out') and  date('Y-m-d') < request('date-in')){


                foreach($ugovor as $ug)
                {
                    $inVal = $ug->datum_useljenja <= request('date-in') && $ug->datum_iseljenja >= request('date-in');
                    $outVal = $ug->datum_useljenja <= request('date-out') && $ug->datum_iseljenja >= request('date-out');

                    if($inVal or $outVal)
                    {
                        print('Stan je zauzet od '. $ug->datum_useljenja . ' do  '. $ug->datum_iseljenja);
                        $zauzet = TRUE;
                        break;
                    }
                }
                if(!$zauzet)
                {
                    $ugovor = new Ugovor;
                    $ugovor->datum_useljenja = request('date-in');
                    $ugovor->datum_iseljenja = request('date-out');
                    $ugovor->cijena_ugovora = $days * $stan->cijena_stana;
                    $ugovor->id_user = $id;
                    $ugovor->id_stan = $stan->id;

                    $ugovor->save();

                    return redirect('/show/'.$stan->id);
                }


            }else {
                print('Unijeli ste stari datum ili vam je datum iseljenja veći od datuma iseljenja');
            }
        }else{
            return(redirect('login'));
        }
    }

    public function komentiraj($id, Request $request){
        $stan = Stan::find($id);
        $id = Auth::id();

        $this->validate($request, [
            'review' => 'required'
        ]);

        if($id){
            $komentar = new Komentar;
            $komentar->komentar = request('review');
            $komentar->id_user = $id;
            $komentar->id_stan = $stan->id;

            $komentar->save();

            return redirect('/show/'.$stan->id);
        }
    }
}
