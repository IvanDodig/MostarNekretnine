<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stan;
use App\Fotografija as Foto;

class StanController extends Controller
{
    public function index(){

   
        $stanovi = Stan::orderBy('created_at','desc')->paginate(2);
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

        return view('stanovi.show', ['id' => $id]);
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
        $stan->delete();
        return redirect('/stan');
    }


}
