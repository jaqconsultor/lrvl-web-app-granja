<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Temporada;
use Session;
use DB;

class TemporadaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Temporada::all();
        return view('crud/crudtemporada/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Temporada';
        return view('crud/crudtemporada/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Temporada::create([
        'nb_temporada'=>$request->nb_temporada
        ]);
        return redirect('/Cruds/Temporada/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Temporada::where('id','=',$id)->first();
        return view('crud/crudtemporada/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Temporada::Find($id);

        $grabar->nb_temporada=$request->nb_temporada;

        $grabar->save();

        return redirect('/Cruds/Temporada/lista');
    }

    public function destroy($id)
    {
        Temporada::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Temporada/lista');
    }


 
}

