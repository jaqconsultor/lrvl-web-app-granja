<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Mae_estados;
use Session;
use DB;

class Mae_estadosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Mae_estados::all();
        return view('crud/crudmae_estados/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Mae_estados';
        return view('crud/crudmae_estados/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Mae_estados::create([
        'in_tipo'=>$request->in_tipo,
        'nb_estado'=>$request->nb_estado
        ]);
        return redirect('/Cruds/Mae_estados/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Mae_estados::where('id','=',$id)->first();
        return view('crud/crudmae_estados/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Mae_estados::Find($id);

        $grabar->in_tipo=$request->in_tipo;
        $grabar->nb_estado=$request->nb_estado;

        $grabar->save();

        return redirect('/Cruds/Mae_estados/lista');
    }

    public function destroy($id)
    {
        Mae_estados::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Mae_estados/lista');
    }


 
}

