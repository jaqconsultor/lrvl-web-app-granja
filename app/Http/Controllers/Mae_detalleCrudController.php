<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Mae_detalle;
use Session;
use DB;

class Mae_detalleCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Mae_detalle::all();
        return view('crud/crudmae_detalle/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Mae_detalle';
        return view('crud/crudmae_detalle/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Mae_detalle::create([
        'in_tipo'=>$request->in_tipo,
        'nu_consecutivo'=>$request->nu_consecutivo,
        'id_gestion_caja'=>$request->id_gestion_caja,
        'id_nu_control'=>$request->id_nu_control,
        'id_productos_codigos'=>$request->id_productos_codigos,
        'id_origenes'=>$request->id_origenes,
        'in_kilos'=>$request->in_kilos,
        'in_usd'=>$request->in_usd,
        'nu_tasa'=>$request->nu_tasa,
        'mo_tot_poinds'=>$request->mo_tot_poinds,
        'mo_pkg'=>$request->mo_pkg,
        'mo_precio'=>$request->mo_precio,
        'mo_sub_total'=>$request->mo_sub_total,
        'in_calculo'=>$request->in_calculo,
        'ca_productos'=>$request->ca_productos,
        'mo_pkg_confirmado'=>$request->mo_pkg_confirmado,
        'mo_pkg_recibido'=>$request->mo_pkg_recibido,
        'mo_recu'=>$request->mo_recu,
        'mo_rejete'=>$request->mo_rejete,
        'id_motif'=>$request->id_motif,
        'nu_lote'=>$request->nu_lote,
        'mo_pkg_rechazo'=>$request->mo_pkg_rechazo
        ]);
        return redirect('/Cruds/Mae_detalle/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Mae_detalle::where('id','=',$id)->first();
        return view('crud/crudmae_detalle/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Mae_detalle::Find($id);

        $grabar->in_tipo=$request->in_tipo;
        $grabar->nu_consecutivo=$request->nu_consecutivo;
        $grabar->id_gestion_caja=$request->id_gestion_caja;
        $grabar->id_nu_control=$request->id_nu_control;
        $grabar->id_productos_codigos=$request->id_productos_codigos;
        $grabar->id_origenes=$request->id_origenes;
        $grabar->in_kilos=$request->in_kilos;
        $grabar->in_usd=$request->in_usd;
        $grabar->nu_tasa=$request->nu_tasa;
        $grabar->mo_tot_poinds=$request->mo_tot_poinds;
        $grabar->mo_pkg=$request->mo_pkg;
        $grabar->mo_precio=$request->mo_precio;
        $grabar->mo_sub_total=$request->mo_sub_total;
        $grabar->in_calculo=$request->in_calculo;
        $grabar->ca_productos=$request->ca_productos;
        $grabar->mo_pkg_confirmado=$request->mo_pkg_confirmado;
        $grabar->mo_pkg_recibido=$request->mo_pkg_recibido;
        $grabar->mo_recu=$request->mo_recu;
        $grabar->mo_rejete=$request->mo_rejete;
        $grabar->id_motif=$request->id_motif;
        $grabar->nu_lote=$request->nu_lote;
        $grabar->mo_pkg_rechazo=$request->mo_pkg_rechazo;

        $grabar->save();

        return redirect('/Cruds/Mae_detalle/lista');
    }

    public function destroy($id)
    {
        Mae_detalle::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Mae_detalle/lista');
    }


 
}

