<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Datos_cos;
use Session;
use DB;

class Datos_cosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Datos_cos::all();
        return view('crud/cruddatos_cos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Datos_cos';
        return view('crud/cruddatos_cos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Datos_cos::create([
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
        'id_prod_twistt'=>$request->id_prod_twistt,
        'id_prod_boite'=>$request->id_prod_boite,
        'nu_facteur'=>$request->nu_facteur
        ]);
        return redirect('/Cruds/Datos_cos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Datos_cos::where('id','=',$id)->first();
        return view('crud/cruddatos_cos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Datos_cos::Find($id);

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
        $grabar->id_prod_twistt=$request->id_prod_twistt;
        $grabar->id_prod_boite=$request->id_prod_boite;
        $grabar->nu_facteur=$request->nu_facteur;

        $grabar->save();

        return redirect('/Cruds/Datos_cos/lista');
    }

    public function destroy($id)
    {
        Datos_cos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Datos_cos/lista');
    }


 
}

