<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Gestion_cajas;
use Session;
use DB;

class Gestion_cajasCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Gestion_cajas::all();
        return view('crud/crudgestion_cajas/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Gestion_cajas';
        return view('crud/crudgestion_cajas/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Gestion_cajas::create([
        'nb_gestion_cajas'=>$request->nb_gestion_cajas,
        'in_activo'=>$request->in_activo,
        'tx_talla_caja'=>$request->tx_talla_caja,
        'nu_piezas_caja'=>$request->nu_piezas_caja,
        'ca_peso_cajas'=>$request->ca_peso_cajas,
        'ca_peso_min'=>$request->ca_peso_min,
        'ca_peso_max'=>$request->ca_peso_max,
        'in_peso'=>$request->in_peso,
        'ca_kilos_caja'=>$request->ca_kilos_caja,
        'nu_caja_etage'=>$request->nu_caja_etage,
        'nu_caja_palete'=>$request->nu_caja_palete,
        'ca_long_bouquet'=>$request->ca_long_bouquet,
        'in_orientacion_bouquet'=>$request->in_orientacion_bouquet,
        'in_glace'=>$request->in_glace,
        'in_glace_haut'=>$request->in_glace_haut,
        'in_glace_bas'=>$request->in_glace_bas,
        'in_glace_centre'=>$request->in_glace_centre,
        'in_glace_fond'=>$request->in_glace_fond,
        'ca_kilos_caja1'=>$request->ca_kilos_caja1,
        'in_autre'=>$request->in_autre,
        'in_autre_haut'=>$request->in_autre_haut,
        'in_autre_bas'=>$request->in_autre_bas,
        'in_autre_centre'=>$request->in_autre_centre,
        'ca_total_poids'=>$request->ca_total_poids,
        'id_producto'=>$request->id_producto,
        'in_prod_caja'=>$request->in_prod_caja,
        'id_prod_twistt'=>$request->id_prod_twistt,
        'mo_precio'=>$request->mo_precio,
        'tx_espanol'=>$request->tx_espanol,
        'fe_registro'=>$request->fe_registro,
        'fe_ult_act'=>$request->fe_ult_act,
        'in_unite'=>$request->in_unite,
        'tx_nota'=>$request->tx_nota,
        'mo_precio_prix'=>$request->mo_precio_prix
        ]);
        return redirect('/Cruds/Gestion_cajas/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Gestion_cajas::where('id','=',$id)->first();
        return view('crud/crudgestion_cajas/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Gestion_cajas::Find($id);

        $grabar->nb_gestion_cajas=$request->nb_gestion_cajas;
        $grabar->in_activo=$request->in_activo;
        $grabar->tx_talla_caja=$request->tx_talla_caja;
        $grabar->nu_piezas_caja=$request->nu_piezas_caja;
        $grabar->ca_peso_cajas=$request->ca_peso_cajas;
        $grabar->ca_peso_min=$request->ca_peso_min;
        $grabar->ca_peso_max=$request->ca_peso_max;
        $grabar->in_peso=$request->in_peso;
        $grabar->ca_kilos_caja=$request->ca_kilos_caja;
        $grabar->nu_caja_etage=$request->nu_caja_etage;
        $grabar->nu_caja_palete=$request->nu_caja_palete;
        $grabar->ca_long_bouquet=$request->ca_long_bouquet;
        $grabar->in_orientacion_bouquet=$request->in_orientacion_bouquet;
        $grabar->in_glace=$request->in_glace;
        $grabar->in_glace_haut=$request->in_glace_haut;
        $grabar->in_glace_bas=$request->in_glace_bas;
        $grabar->in_glace_centre=$request->in_glace_centre;
        $grabar->in_glace_fond=$request->in_glace_fond;
        $grabar->ca_kilos_caja1=$request->ca_kilos_caja1;
        $grabar->in_autre=$request->in_autre;
        $grabar->in_autre_haut=$request->in_autre_haut;
        $grabar->in_autre_bas=$request->in_autre_bas;
        $grabar->in_autre_centre=$request->in_autre_centre;
        $grabar->ca_total_poids=$request->ca_total_poids;
        $grabar->id_producto=$request->id_producto;
        $grabar->in_prod_caja=$request->in_prod_caja;
        $grabar->id_prod_twistt=$request->id_prod_twistt;
        $grabar->mo_precio=$request->mo_precio;
        $grabar->tx_espanol=$request->tx_espanol;
        $grabar->fe_registro=$request->fe_registro;
        $grabar->fe_ult_act=$request->fe_ult_act;
        $grabar->in_unite=$request->in_unite;
        $grabar->tx_nota=$request->tx_nota;
        $grabar->mo_precio_prix=$request->mo_precio_prix;

        $grabar->save();

        return redirect('/Cruds/Gestion_cajas/lista');
    }

    public function destroy($id)
    {
        Gestion_cajas::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Gestion_cajas/lista');
    }


 
}

