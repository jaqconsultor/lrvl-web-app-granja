<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Datos_rgastos;
use Session;
use DB;

class Datos_rgastosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Datos_rgastos::all();
        return view('crud/cruddatos_rgastos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Datos_rgastos';
        return view('crud/cruddatos_rgastos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Datos_rgastos::create([
        'fe_registro'=>$request->fe_registro,
        'id_control'=>$request->id_control,
        'nu_order'=>$request->nu_order,
        'id_rgasto_concepto'=>$request->id_rgasto_concepto,
        'in_suma'=>$request->in_suma,
        'mo_gasto'=>$request->mo_gasto
        ]);
        return redirect('/Cruds/Datos_rgastos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Datos_rgastos::where('id','=',$id)->first();
        return view('crud/cruddatos_rgastos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Datos_rgastos::Find($id);

        $grabar->fe_registro=$request->fe_registro;
        $grabar->id_control=$request->id_control;
        $grabar->nu_order=$request->nu_order;
        $grabar->id_rgasto_concepto=$request->id_rgasto_concepto;
        $grabar->in_suma=$request->in_suma;
        $grabar->mo_gasto=$request->mo_gasto;

        $grabar->save();

        return redirect('/Cruds/Datos_rgastos/lista');
    }

    public function destroy($id)
    {
        Datos_rgastos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Datos_rgastos/lista');
    }


 
}

