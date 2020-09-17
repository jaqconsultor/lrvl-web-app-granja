<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Requisicion_detalle;
use Session;
use DB;

class Requisicion_detalleCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Requisicion_detalle::all();
        return view('crud/crudrequisicion_detalle/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Requisicion_detalle';
        return view('crud/crudrequisicion_detalle/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Requisicion_detalle::create([
        'iddetalle'=>$request->iddetalle,
        'idrequisicion'=>$request->idrequisicion,
        'id_control'=>$request->id_control
        ]);
        return redirect('/Cruds/Requisicion_detalle/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Requisicion_detalle::where('id','=',$id)->first();
        return view('crud/crudrequisicion_detalle/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Requisicion_detalle::Find($id);

        $grabar->iddetalle=$request->iddetalle;
        $grabar->idrequisicion=$request->idrequisicion;
        $grabar->id_control=$request->id_control;

        $grabar->save();

        return redirect('/Cruds/Requisicion_detalle/lista');
    }

    public function destroy($id)
    {
        Requisicion_detalle::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Requisicion_detalle/lista');
    }


 
}

