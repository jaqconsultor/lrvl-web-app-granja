<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Datos_b3;
use Session;
use DB;

class Datos_b3CrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Datos_b3::all();
        return view('crud/cruddatos_b3/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Datos_b3';
        return view('crud/cruddatos_b3/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Datos_b3::create([
        'usuario'=>$request->usuario,
        'nu_pagina'=>$request->nu_pagina,
        'nu_registro'=>$request->nu_registro,
        'campo_01'=>$request->campo_01,
        'campo_01_1'=>$request->campo_01_1,
        'campo_02'=>$request->campo_02,
        'campo_03'=>$request->campo_03,
        'campo_04'=>$request->campo_04,
        'campo_05'=>$request->campo_05,
        'campo_06'=>$request->campo_06,
        'campo_07'=>$request->campo_07,
        'campo_08'=>$request->campo_08,
        'campo_09'=>$request->campo_09,
        'campo_10'=>$request->campo_10,
        'campo_11'=>$request->campo_11,
        'campo_12'=>$request->campo_12,
        'campo_13'=>$request->campo_13,
        'campo_14'=>$request->campo_14,
        'campo_15'=>$request->campo_15,
        'campo_16'=>$request->campo_16,
        'campo_17'=>$request->campo_17,
        'campo_18'=>$request->campo_18,
        'campo_19'=>$request->campo_19,
        'campo_20'=>$request->campo_20,
        'campo_43'=>$request->campo_43,
        'campo_44'=>$request->campo_44,
        'campo_45'=>$request->campo_45,
        'campo_46'=>$request->campo_46,
        'campo_47'=>$request->campo_47,
        'campo_48'=>$request->campo_48,
        'campo_49'=>$request->campo_49,
        'campo_50'=>$request->campo_50,
        'campo_51'=>$request->campo_51,
        'nu_control'=>$request->nu_control
        ]);
        return redirect('/Cruds/Datos_b3/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Datos_b3::where('id','=',$id)->first();
        return view('crud/cruddatos_b3/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Datos_b3::Find($id);

        $grabar->usuario=$request->usuario;
        $grabar->nu_pagina=$request->nu_pagina;
        $grabar->nu_registro=$request->nu_registro;
        $grabar->campo_01=$request->campo_01;
        $grabar->campo_01_1=$request->campo_01_1;
        $grabar->campo_02=$request->campo_02;
        $grabar->campo_03=$request->campo_03;
        $grabar->campo_04=$request->campo_04;
        $grabar->campo_05=$request->campo_05;
        $grabar->campo_06=$request->campo_06;
        $grabar->campo_07=$request->campo_07;
        $grabar->campo_08=$request->campo_08;
        $grabar->campo_09=$request->campo_09;
        $grabar->campo_10=$request->campo_10;
        $grabar->campo_11=$request->campo_11;
        $grabar->campo_12=$request->campo_12;
        $grabar->campo_13=$request->campo_13;
        $grabar->campo_14=$request->campo_14;
        $grabar->campo_15=$request->campo_15;
        $grabar->campo_16=$request->campo_16;
        $grabar->campo_17=$request->campo_17;
        $grabar->campo_18=$request->campo_18;
        $grabar->campo_19=$request->campo_19;
        $grabar->campo_20=$request->campo_20;
        $grabar->campo_43=$request->campo_43;
        $grabar->campo_44=$request->campo_44;
        $grabar->campo_45=$request->campo_45;
        $grabar->campo_46=$request->campo_46;
        $grabar->campo_47=$request->campo_47;
        $grabar->campo_48=$request->campo_48;
        $grabar->campo_49=$request->campo_49;
        $grabar->campo_50=$request->campo_50;
        $grabar->campo_51=$request->campo_51;
        $grabar->nu_control=$request->nu_control;

        $grabar->save();

        return redirect('/Cruds/Datos_b3/lista');
    }

    public function destroy($id)
    {
        Datos_b3::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Datos_b3/lista');
    }


 
}

