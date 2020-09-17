<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Requisicion_pre;
use Session;
use DB;

class Requisicion_preCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Requisicion_pre::all();
        return view('crud/crudrequisicion_pre/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Requisicion_pre';
        return view('crud/crudrequisicion_pre/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Requisicion_pre::create([
        'fe_registro'=>$request->fe_registro,
        'tx_informacion'=>$request->tx_informacion,
        'in_estado'=>$request->in_estado,
        'in_import'=>$request->in_import
        ]);
        return redirect('/Cruds/Requisicion_pre/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Requisicion_pre::where('id','=',$id)->first();
        return view('crud/crudrequisicion_pre/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Requisicion_pre::Find($id);

        $grabar->fe_registro=$request->fe_registro;
        $grabar->tx_informacion=$request->tx_informacion;
        $grabar->in_estado=$request->in_estado;
        $grabar->in_import=$request->in_import;

        $grabar->save();

        return redirect('/Cruds/Requisicion_pre/lista');
    }

    public function destroy($id)
    {
        Requisicion_pre::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Requisicion_pre/lista');
    }


 
}

