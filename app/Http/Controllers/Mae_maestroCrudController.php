<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Mae_maestro;
use Session;
use DB;

class Mae_maestroCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Mae_maestro::all();
        return view('crud/crudmae_maestro/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Mae_maestro';
        return view('crud/crudmae_maestro/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Mae_maestro::create([
        'in_tipo'=>$request->in_tipo,
        'nu_consecutivo'=>$request->nu_consecutivo,
        'fe_maestro'=>$request->fe_maestro,
        'st_maestro'=>$request->st_maestro,
        'tx_soumision'=>$request->tx_soumision,
        'id_cliente'=>$request->id_cliente,
        'nb_contacto'=>$request->nb_contacto,
        'tx_condiciones'=>$request->tx_condiciones,
        'tx_detalle_librason'=>$request->tx_detalle_librason,
        'fe_librason'=>$request->fe_librason,
        'id_vendedor'=>$request->id_vendedor,
        'tx_nota'=>$request->tx_nota,
        'mo_tps'=>$request->mo_tps,
        'mo_tpq'=>$request->mo_tpq,
        'mo_total1'=>$request->mo_total1,
        'mo_total'=>$request->mo_total,
        'id_nu_control'=>$request->id_nu_control,
        'id_origenes'=>$request->id_origenes,
        'in_usd'=>$request->in_usd,
        'nu_tasa'=>$request->nu_tasa,
        'in_kilos'=>$request->in_kilos,
        'in_calculo'=>$request->in_calculo,
        'id_login'=>$request->id_login,
        'nb_login'=>$request->nb_login,
        'id_empresa'=>$request->id_empresa,
        'in_contenedor'=>$request->in_contenedor,
        'in_numcontrol'=>$request->in_numcontrol,
        'id_productor'=>$request->id_productor,
        'in_paleta'=>$request->in_paleta,
        'nu_telefono1'=>$request->nu_telefono1,
        'id_chofer'=>$request->id_chofer,
        'id_lugar'=>$request->id_lugar,
        'id_temporada'=>$request->id_temporada,
        'id_broker'=>$request->id_broker,
        'mo_precio'=>$request->mo_precio,
        'in_ruta_paleta'=>$request->in_ruta_paleta,
        'in_typeb'=>$request->in_typeb,
        'in_proteccion'=>$request->in_proteccion,
        'nu_paletes'=>$request->nu_paletes,
        'nu_boites'=>$request->nu_boites,
        'nu_tpaletes'=>$request->nu_tpaletes,
        'nu_tboites'=>$request->nu_tboites,
        'nu_busqueda'=>$request->nu_busqueda
        ]);
        return redirect('/Cruds/Mae_maestro/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Mae_maestro::where('id','=',$id)->first();
        return view('crud/crudmae_maestro/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Mae_maestro::Find($id);

        $grabar->in_tipo=$request->in_tipo;
        $grabar->nu_consecutivo=$request->nu_consecutivo;
        $grabar->fe_maestro=$request->fe_maestro;
        $grabar->st_maestro=$request->st_maestro;
        $grabar->tx_soumision=$request->tx_soumision;
        $grabar->id_cliente=$request->id_cliente;
        $grabar->nb_contacto=$request->nb_contacto;
        $grabar->tx_condiciones=$request->tx_condiciones;
        $grabar->tx_detalle_librason=$request->tx_detalle_librason;
        $grabar->fe_librason=$request->fe_librason;
        $grabar->id_vendedor=$request->id_vendedor;
        $grabar->tx_nota=$request->tx_nota;
        $grabar->mo_tps=$request->mo_tps;
        $grabar->mo_tpq=$request->mo_tpq;
        $grabar->mo_total1=$request->mo_total1;
        $grabar->mo_total=$request->mo_total;
        $grabar->id_nu_control=$request->id_nu_control;
        $grabar->id_origenes=$request->id_origenes;
        $grabar->in_usd=$request->in_usd;
        $grabar->nu_tasa=$request->nu_tasa;
        $grabar->in_kilos=$request->in_kilos;
        $grabar->in_calculo=$request->in_calculo;
        $grabar->id_login=$request->id_login;
        $grabar->nb_login=$request->nb_login;
        $grabar->id_empresa=$request->id_empresa;
        $grabar->in_contenedor=$request->in_contenedor;
        $grabar->in_numcontrol=$request->in_numcontrol;
        $grabar->id_productor=$request->id_productor;
        $grabar->in_paleta=$request->in_paleta;
        $grabar->nu_telefono1=$request->nu_telefono1;
        $grabar->id_chofer=$request->id_chofer;
        $grabar->id_lugar=$request->id_lugar;
        $grabar->id_temporada=$request->id_temporada;
        $grabar->id_broker=$request->id_broker;
        $grabar->mo_precio=$request->mo_precio;
        $grabar->in_ruta_paleta=$request->in_ruta_paleta;
        $grabar->in_typeb=$request->in_typeb;
        $grabar->in_proteccion=$request->in_proteccion;
        $grabar->nu_paletes=$request->nu_paletes;
        $grabar->nu_boites=$request->nu_boites;
        $grabar->nu_tpaletes=$request->nu_tpaletes;
        $grabar->nu_tboites=$request->nu_tboites;
        $grabar->nu_busqueda=$request->nu_busqueda;

        $grabar->save();

        return redirect('/Cruds/Mae_maestro/lista');
    }

    public function destroy($id)
    {
        Mae_maestro::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Mae_maestro/lista');
    }


 
}

