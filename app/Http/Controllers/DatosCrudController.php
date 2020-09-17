<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Datos;
use Session;
use DB;

class DatosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Datos::all();
        return view('crud/cruddatos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Datos';
        return view('crud/cruddatos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Datos::create([
        'nu_control'=>$request->nu_control,
        'fe_factura'=>$request->fe_factura,
        'nu_factura'=>$request->nu_factura,
        'nu_comanda'=>$request->nu_comanda,
        'id_cliente'=>$request->id_cliente,
        'id_chofer'=>$request->id_chofer,
        'ca_pal_azul_138'=>$request->ca_pal_azul_138,
        'ca_pal_amar_138'=>$request->ca_pal_amar_138,
        'ca_pal_azul_116'=>$request->ca_pal_azul_116,
        'ca_pal_amar_116'=>$request->ca_pal_amar_116,
        'ca_tot_138'=>$request->ca_tot_138,
        'ca_tot_116'=>$request->ca_tot_116,
        'id_lugar'=>$request->id_lugar,
        'id_camion'=>$request->id_camion,
        'in_ver_doc'=>$request->in_ver_doc,
        'in_ref_ext'=>$request->in_ref_ext,
        'in_retorno'=>$request->in_retorno,
        'nu_requisicion'=>$request->nu_requisicion,
        'fe_entrega'=>$request->fe_entrega,
        'ho_entrega'=>$request->ho_entrega,
        'fe_hrrdv'=>$request->fe_hrrdv,
        'nu_rdv'=>$request->nu_rdv,
        'in_impreso'=>$request->in_impreso,
        'in_external'=>$request->in_external,
        'mo_factura'=>$request->mo_factura,
        'in_conforme'=>$request->in_conforme,
        'in_concilia'=>$request->in_concilia,
        'ca_pal_azul_138_c'=>$request->ca_pal_azul_138_c,
        'ca_pal_amar_138_c'=>$request->ca_pal_amar_138_c,
        'ca_pal_azul_116_c'=>$request->ca_pal_azul_116_c,
        'ca_pal_amar_116_c'=>$request->ca_pal_amar_116_c,
        'ca_pal_cage_138_c'=>$request->ca_pal_cage_138_c,
        'ca_pal_cage_116_c'=>$request->ca_pal_cage_116_c,
        'ca_tot_138_c'=>$request->ca_tot_138_c,
        'ca_tot_116_c'=>$request->ca_tot_116_c,
        'nu_fact_trans'=>$request->nu_fact_trans,
        'mo_factura_trans'=>$request->mo_factura_trans,
        'mo_tarifa'=>$request->mo_tarifa,
        'in_mf'=>$request->in_mf,
        'in_mbc'=>$request->in_mbc,
        'in_mr'=>$request->in_mr,
        'in_mfr'=>$request->in_mfr,
        'in_mbl'=>$request->in_mbl,
        'in_pret'=>$request->in_pret,
        'in_seleccion'=>$request->in_seleccion,
        'in_itrade'=>$request->in_itrade,
        'id_empresa'=>$request->id_empresa,
        'nu_grupo'=>$request->nu_grupo,
        'mo_tasah'=>$request->mo_tasah,
        'in_activo'=>$request->in_activo,
        'ca_viaje'=>$request->ca_viaje,
        'fe_salida'=>$request->fe_salida,
        'fe_llegada'=>$request->fe_llegada,
        'nu_correlativo'=>$request->nu_correlativo,
        'nu_correlativo_cam'=>$request->nu_correlativo_cam,
        'nu_awb'=>$request->nu_awb,
        'in_import'=>$request->in_import,
        'id_embarquement'=>$request->id_embarquement,
        'id_aerolineas'=>$request->id_aerolineas,
        'in_tipo_import'=>$request->in_tipo_import,
        'nu_factura_final'=>$request->nu_factura_final,
        'nu_doaduana'=>$request->nu_doaduana,
        'nu_salida'=>$request->nu_salida,
        'nu_llegada'=>$request->nu_llegada,
        'ca_cajas'=>$request->ca_cajas,
        'in_sin_paletas'=>$request->in_sin_paletas,
        'fe_import'=>$request->fe_import,
        'fe_pickup'=>$request->fe_pickup,
        'id_broken1'=>$request->id_broken1,
        'id_broken2'=>$request->id_broken2,
        'id_broken3'=>$request->id_broken3,
        'nu_fac_broken1'=>$request->nu_fac_broken1,
        'nu_fac_broken2'=>$request->nu_fac_broken2,
        'nu_fac_broken3'=>$request->nu_fac_broken3,
        'mo_broken1'=>$request->mo_broken1,
        'mo_broken2'=>$request->mo_broken2,
        'mo_broken3'=>$request->mo_broken3,
        'id_nu_order'=>$request->id_nu_order,
        'in_tipo_order'=>$request->in_tipo_order,
        'nu_bill_land'=>$request->nu_bill_land,
        'in_broken_usd1'=>$request->in_broken_usd1,
        'in_broken_usd2'=>$request->in_broken_usd2,
        'in_broken_usd3'=>$request->in_broken_usd3,
        'id_temporada'=>$request->id_temporada,
        'id_corr_camion'=>$request->id_corr_camion,
        'in_sin_trasport'=>$request->in_sin_trasport,
        'nu_requisicion2'=>$request->nu_requisicion2,
        'fe_entrega2'=>$request->fe_entrega2,
        'ho_entrega2'=>$request->ho_entrega2,
        'mo_factura2'=>$request->mo_factura2,
        'fe_hrrdv2'=>$request->fe_hrrdv2,
        'nu_rdv2'=>$request->nu_rdv2,
        'nu_fact_trans2'=>$request->nu_fact_trans2,
        'mo_factura_trans2'=>$request->mo_factura_trans2,
        'id_chofer2'=>$request->id_chofer2,
        'nu_fac_frais_a'=>$request->nu_fac_frais_a,
        'mo_frais_a'=>$request->mo_frais_a,
        'in_frais_a'=>$request->in_frais_a,
        'nu_fac_navcan'=>$request->nu_fac_navcan,
        'mo_navcan'=>$request->mo_navcan,
        'in_navcan'=>$request->in_navcan,
        'nu_fac_terminalf'=>$request->nu_fac_terminalf,
        'mo_terminalf'=>$request->mo_terminalf,
        'in_terminalf'=>$request->in_terminalf,
        'nu_fac_autre'=>$request->nu_fac_autre,
        'mo_autre'=>$request->mo_autre,
        'in_autre'=>$request->in_autre,
        'motif_autre'=>$request->motif_autre,
        'fe_frais_a'=>$request->fe_frais_a,
        'fe_navcan'=>$request->fe_navcan,
        'fe_terminal'=>$request->fe_terminal,
        'fe_autre'=>$request->fe_autre,
        'mo_tx_frais_a'=>$request->mo_tx_frais_a,
        'mo_tx_navcan'=>$request->mo_tx_navcan,
        'mo_tx_terminal'=>$request->mo_tx_terminal,
        'mo_tx_autre'=>$request->mo_tx_autre,
        'fe_fact_trans'=>$request->fe_fact_trans,
        'fe_broken1'=>$request->fe_broken1,
        'fe_broken2'=>$request->fe_broken2,
        'fe_broken3'=>$request->fe_broken3,
        'in_f_mondeda1'=>$request->in_f_mondeda1,
        'poids_vol'=>$request->poids_vol,
        'mo_precio_p'=>$request->mo_precio_p
        ]);
        return redirect('/Cruds/Datos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Datos::where('id','=',$id)->first();
        return view('crud/cruddatos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Datos::Find($id);

        $grabar->nu_control=$request->nu_control;
        $grabar->fe_factura=$request->fe_factura;
        $grabar->nu_factura=$request->nu_factura;
        $grabar->nu_comanda=$request->nu_comanda;
        $grabar->id_cliente=$request->id_cliente;
        $grabar->id_chofer=$request->id_chofer;
        $grabar->ca_pal_azul_138=$request->ca_pal_azul_138;
        $grabar->ca_pal_amar_138=$request->ca_pal_amar_138;
        $grabar->ca_pal_azul_116=$request->ca_pal_azul_116;
        $grabar->ca_pal_amar_116=$request->ca_pal_amar_116;
        $grabar->ca_tot_138=$request->ca_tot_138;
        $grabar->ca_tot_116=$request->ca_tot_116;
        $grabar->id_lugar=$request->id_lugar;
        $grabar->id_camion=$request->id_camion;
        $grabar->in_ver_doc=$request->in_ver_doc;
        $grabar->in_ref_ext=$request->in_ref_ext;
        $grabar->in_retorno=$request->in_retorno;
        $grabar->nu_requisicion=$request->nu_requisicion;
        $grabar->fe_entrega=$request->fe_entrega;
        $grabar->ho_entrega=$request->ho_entrega;
        $grabar->fe_hrrdv=$request->fe_hrrdv;
        $grabar->nu_rdv=$request->nu_rdv;
        $grabar->in_impreso=$request->in_impreso;
        $grabar->in_external=$request->in_external;
        $grabar->mo_factura=$request->mo_factura;
        $grabar->in_conforme=$request->in_conforme;
        $grabar->in_concilia=$request->in_concilia;
        $grabar->ca_pal_azul_138_c=$request->ca_pal_azul_138_c;
        $grabar->ca_pal_amar_138_c=$request->ca_pal_amar_138_c;
        $grabar->ca_pal_azul_116_c=$request->ca_pal_azul_116_c;
        $grabar->ca_pal_amar_116_c=$request->ca_pal_amar_116_c;
        $grabar->ca_pal_cage_138_c=$request->ca_pal_cage_138_c;
        $grabar->ca_pal_cage_116_c=$request->ca_pal_cage_116_c;
        $grabar->ca_tot_138_c=$request->ca_tot_138_c;
        $grabar->ca_tot_116_c=$request->ca_tot_116_c;
        $grabar->nu_fact_trans=$request->nu_fact_trans;
        $grabar->mo_factura_trans=$request->mo_factura_trans;
        $grabar->mo_tarifa=$request->mo_tarifa;
        $grabar->in_mf=$request->in_mf;
        $grabar->in_mbc=$request->in_mbc;
        $grabar->in_mr=$request->in_mr;
        $grabar->in_mfr=$request->in_mfr;
        $grabar->in_mbl=$request->in_mbl;
        $grabar->in_pret=$request->in_pret;
        $grabar->in_seleccion=$request->in_seleccion;
        $grabar->in_itrade=$request->in_itrade;
        $grabar->id_empresa=$request->id_empresa;
        $grabar->nu_grupo=$request->nu_grupo;
        $grabar->mo_tasah=$request->mo_tasah;
        $grabar->in_activo=$request->in_activo;
        $grabar->ca_viaje=$request->ca_viaje;
        $grabar->fe_salida=$request->fe_salida;
        $grabar->fe_llegada=$request->fe_llegada;
        $grabar->nu_correlativo=$request->nu_correlativo;
        $grabar->nu_correlativo_cam=$request->nu_correlativo_cam;
        $grabar->nu_awb=$request->nu_awb;
        $grabar->in_import=$request->in_import;
        $grabar->id_embarquement=$request->id_embarquement;
        $grabar->id_aerolineas=$request->id_aerolineas;
        $grabar->in_tipo_import=$request->in_tipo_import;
        $grabar->nu_factura_final=$request->nu_factura_final;
        $grabar->nu_doaduana=$request->nu_doaduana;
        $grabar->nu_salida=$request->nu_salida;
        $grabar->nu_llegada=$request->nu_llegada;
        $grabar->ca_cajas=$request->ca_cajas;
        $grabar->in_sin_paletas=$request->in_sin_paletas;
        $grabar->fe_import=$request->fe_import;
        $grabar->fe_pickup=$request->fe_pickup;
        $grabar->id_broken1=$request->id_broken1;
        $grabar->id_broken2=$request->id_broken2;
        $grabar->id_broken3=$request->id_broken3;
        $grabar->nu_fac_broken1=$request->nu_fac_broken1;
        $grabar->nu_fac_broken2=$request->nu_fac_broken2;
        $grabar->nu_fac_broken3=$request->nu_fac_broken3;
        $grabar->mo_broken1=$request->mo_broken1;
        $grabar->mo_broken2=$request->mo_broken2;
        $grabar->mo_broken3=$request->mo_broken3;
        $grabar->id_nu_order=$request->id_nu_order;
        $grabar->in_tipo_order=$request->in_tipo_order;
        $grabar->nu_bill_land=$request->nu_bill_land;
        $grabar->in_broken_usd1=$request->in_broken_usd1;
        $grabar->in_broken_usd2=$request->in_broken_usd2;
        $grabar->in_broken_usd3=$request->in_broken_usd3;
        $grabar->id_temporada=$request->id_temporada;
        $grabar->id_corr_camion=$request->id_corr_camion;
        $grabar->in_sin_trasport=$request->in_sin_trasport;
        $grabar->nu_requisicion2=$request->nu_requisicion2;
        $grabar->fe_entrega2=$request->fe_entrega2;
        $grabar->ho_entrega2=$request->ho_entrega2;
        $grabar->mo_factura2=$request->mo_factura2;
        $grabar->fe_hrrdv2=$request->fe_hrrdv2;
        $grabar->nu_rdv2=$request->nu_rdv2;
        $grabar->nu_fact_trans2=$request->nu_fact_trans2;
        $grabar->mo_factura_trans2=$request->mo_factura_trans2;
        $grabar->id_chofer2=$request->id_chofer2;
        $grabar->nu_fac_frais_a=$request->nu_fac_frais_a;
        $grabar->mo_frais_a=$request->mo_frais_a;
        $grabar->in_frais_a=$request->in_frais_a;
        $grabar->nu_fac_navcan=$request->nu_fac_navcan;
        $grabar->mo_navcan=$request->mo_navcan;
        $grabar->in_navcan=$request->in_navcan;
        $grabar->nu_fac_terminalf=$request->nu_fac_terminalf;
        $grabar->mo_terminalf=$request->mo_terminalf;
        $grabar->in_terminalf=$request->in_terminalf;
        $grabar->nu_fac_autre=$request->nu_fac_autre;
        $grabar->mo_autre=$request->mo_autre;
        $grabar->in_autre=$request->in_autre;
        $grabar->motif_autre=$request->motif_autre;
        $grabar->fe_frais_a=$request->fe_frais_a;
        $grabar->fe_navcan=$request->fe_navcan;
        $grabar->fe_terminal=$request->fe_terminal;
        $grabar->fe_autre=$request->fe_autre;
        $grabar->mo_tx_frais_a=$request->mo_tx_frais_a;
        $grabar->mo_tx_navcan=$request->mo_tx_navcan;
        $grabar->mo_tx_terminal=$request->mo_tx_terminal;
        $grabar->mo_tx_autre=$request->mo_tx_autre;
        $grabar->fe_fact_trans=$request->fe_fact_trans;
        $grabar->fe_broken1=$request->fe_broken1;
        $grabar->fe_broken2=$request->fe_broken2;
        $grabar->fe_broken3=$request->fe_broken3;
        $grabar->in_f_mondeda1=$request->in_f_mondeda1;
        $grabar->poids_vol=$request->poids_vol;
        $grabar->mo_precio_p=$request->mo_precio_p;

        $grabar->save();

        return redirect('/Cruds/Datos/lista');
    }

    public function destroy($id)
    {
        Datos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Datos/lista');
    }


 
}

