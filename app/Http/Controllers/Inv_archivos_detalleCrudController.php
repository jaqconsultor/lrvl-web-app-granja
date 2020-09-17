<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Inv_archivos_detalle;
use Session;
use DB;

class Inv_archivos_detalleCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Inv_archivos_detalle::all();
        return view('crud/crudinv_archivos_detalle/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Inv_archivos_detalle';
        return view('crud/crudinv_archivos_detalle/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Inv_archivos_detalle::create([
        'id_inv_archivos'=>$request->id_inv_archivos,
        'nu_codebar'=>$request->nu_codebar,
        'nu_cantidad'=>$request->nu_cantidad
        ]);
        return redirect('/Cruds/Inv_archivos_detalle/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Inv_archivos_detalle::where('id','=',$id)->first();
        return view('crud/crudinv_archivos_detalle/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Inv_archivos_detalle::Find($id);

        $grabar->id_inv_archivos=$request->id_inv_archivos;
        $grabar->nu_codebar=$request->nu_codebar;
        $grabar->nu_cantidad=$request->nu_cantidad;

        $grabar->save();

        return redirect('/Cruds/Inv_archivos_detalle/lista');
    }

    public function destroy($id)
    {
        Inv_archivos_detalle::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Inv_archivos_detalle/lista');
    }


 
}

