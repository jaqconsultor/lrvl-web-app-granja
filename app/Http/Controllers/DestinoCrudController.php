<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Destino;
use Session;
use DB;

class DestinoCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Destino::all();
        return view('crud/cruddestino/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Destino';
        return view('crud/cruddestino/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Destino::create([
        'nb_destino'=>$request->nb_destino
        ]);
        return redirect('/Cruds/Destino/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Destino::where('id','=',$id)->first();
        return view('crud/cruddestino/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Destino::Find($id);

        $grabar->nb_destino=$request->nb_destino;

        $grabar->save();

        return redirect('/Cruds/Destino/lista');
    }

    public function destroy($id)
    {
        Destino::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Destino/lista');
    }


 
}

