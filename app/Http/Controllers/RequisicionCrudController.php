<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Requisicion;
use Session;
use DB;

class RequisicionCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Requisicion::all();
        return view('crud/crudrequisicion/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Requisicion';
        return view('crud/crudrequisicion/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Requisicion::create([
        'fe_requisicion'=>$request->fe_requisicion,
        'id_chofer'=>$request->id_chofer,
        'in_estatus'=>$request->in_estatus,
        'in_impreso'=>$request->in_impreso,
        'in_retard'=>$request->in_retard,
        'in_pret'=>$request->in_pret,
        'fe_date_pre'=>$request->fe_date_pre,
        'id_pre_req'=>$request->id_pre_req
        ]);
        return redirect('/Cruds/Requisicion/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Requisicion::where('id','=',$id)->first();
        return view('crud/crudrequisicion/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Requisicion::Find($id);

        $grabar->fe_requisicion=$request->fe_requisicion;
        $grabar->id_chofer=$request->id_chofer;
        $grabar->in_estatus=$request->in_estatus;
        $grabar->in_impreso=$request->in_impreso;
        $grabar->in_retard=$request->in_retard;
        $grabar->in_pret=$request->in_pret;
        $grabar->fe_date_pre=$request->fe_date_pre;
        $grabar->id_pre_req=$request->id_pre_req;

        $grabar->save();

        return redirect('/Cruds/Requisicion/lista');
    }

    public function destroy($id)
    {
        Requisicion::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Requisicion/lista');
    }


 
}

