<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Motif;
use Session;
use DB;

class MotifCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Motif::all();
        return view('crud/crudmotif/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Motif';
        return view('crud/crudmotif/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Motif::create([
        'nb_motif'=>$request->nb_motif
        ]);
        return redirect('/Cruds/Motif/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Motif::where('id','=',$id)->first();
        return view('crud/crudmotif/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Motif::Find($id);

        $grabar->nb_motif=$request->nb_motif;

        $grabar->save();

        return redirect('/Cruds/Motif/lista');
    }

    public function destroy($id)
    {
        Motif::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Motif/lista');
    }


 
}

