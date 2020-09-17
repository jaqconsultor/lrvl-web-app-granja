<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Datos_b3_detalle;
use Session;
use DB;

class Datos_b3_detalleCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Datos_b3_detalle::all();
        return view('crud/cruddatos_b3_detalle/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Datos_b3_detalle';
        return view('crud/cruddatos_b3_detalle/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Datos_b3_detalle::create([
        'usuario'=>$request->usuario,
        'nu_registro'=>$request->nu_registro,
        'cod_aduana'=>$request->cod_aduana,
        'nb_productos'=>$request->nb_productos,
        'ca_registros'=>$request->ca_registros,
        'mo_suma_can'=>$request->mo_suma_can,
        'mo_suma_usd'=>$request->mo_suma_usd,
        'nu_control'=>$request->nu_control,
        'tmo_tot_poinds'=>$request->tmo_tot_poinds
        ]);
        return redirect('/Cruds/Datos_b3_detalle/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Datos_b3_detalle::where('id','=',$id)->first();
        return view('crud/cruddatos_b3_detalle/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Datos_b3_detalle::Find($id);

        $grabar->usuario=$request->usuario;
        $grabar->nu_registro=$request->nu_registro;
        $grabar->cod_aduana=$request->cod_aduana;
        $grabar->nb_productos=$request->nb_productos;
        $grabar->ca_registros=$request->ca_registros;
        $grabar->mo_suma_can=$request->mo_suma_can;
        $grabar->mo_suma_usd=$request->mo_suma_usd;
        $grabar->nu_control=$request->nu_control;
        $grabar->tmo_tot_poinds=$request->tmo_tot_poinds;

        $grabar->save();

        return redirect('/Cruds/Datos_b3_detalle/lista');
    }

    public function destroy($id)
    {
        Datos_b3_detalle::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Datos_b3_detalle/lista');
    }


 
}

