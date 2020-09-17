<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Grupo_paises;
use Session;
use DB;

class Grupo_paisesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Grupo_paises::all();
        return view('crud/crudgrupo_paises/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Grupo_paises';
        return view('crud/crudgrupo_paises/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Grupo_paises::create([
        'co_grupo'=>$request->co_grupo,
        'nb_grupo'=>$request->nb_grupo,
        'co_pais'=>$request->co_pais
        ]);
        return redirect('/Cruds/Grupo_paises/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Grupo_paises::where('id','=',$id)->first();
        return view('crud/crudgrupo_paises/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Grupo_paises::Find($id);

        $grabar->co_grupo=$request->co_grupo;
        $grabar->nb_grupo=$request->nb_grupo;
        $grabar->co_pais=$request->co_pais;

        $grabar->save();

        return redirect('/Cruds/Grupo_paises/lista');
    }

    public function destroy($id)
    {
        Grupo_paises::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Grupo_paises/lista');
    }


 
}

