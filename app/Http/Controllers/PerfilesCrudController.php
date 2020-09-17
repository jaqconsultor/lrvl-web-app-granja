<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Perfiles;
use Session;
use DB;

class PerfilesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Perfiles::all();
        return view('crud/crudperfiles/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Perfiles';
        return view('crud/crudperfiles/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Perfiles::create([
        'nb_perfil'=>$request->nb_perfil
        ]);
        return redirect('/Cruds/Perfiles/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Perfiles::where('id','=',$id)->first();
        return view('crud/crudperfiles/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Perfiles::Find($id);

        $grabar->nb_perfil=$request->nb_perfil;

        $grabar->save();

        return redirect('/Cruds/Perfiles/lista');
    }

    public function destroy($id)
    {
        Perfiles::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Perfiles/lista');
    }


 
}

