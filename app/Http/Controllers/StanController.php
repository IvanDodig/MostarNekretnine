<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stan;

class StanController extends Controller
{
    public function index(){

        $stanovi = Stan::orderBy('created_at','desc')->paginate(4);

        return view('stanovi.index',['stanovi' => $stanovi]);
    }

    public function show($id){

        return view('stanovi.show', ['id' => $id]);
    }

    public function create(){
        return view('stanovi.create');
    }

    public function store(){

        $stan = new Stan;
        $stan->naziv = request('naziv');
        $stan->internet = TRUE;
        $stan->lokacija = request('lokacija');
        $stan->kvadratura = request('kvadratura');
        $stan->broj_soba = 2;
        $stan->cijena_stana = request('cijena_stana');
        $stan->opis = request('opis');

        $stan->save();

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
