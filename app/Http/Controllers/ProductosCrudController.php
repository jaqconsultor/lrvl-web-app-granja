<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Productos;
use Session;
use DB;

class ProductosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Productos::all();
        return view('crud/crudproductos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Productos';
        return view('crud/crudproductos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Productos::create([
        'id_producto'=>$request->id_producto,
        'id_linea'=>$request->id_linea,
        'id_marca'=>$request->id_marca,
        'id_modelo'=>$request->id_modelo,
        'descrip'=>$request->descrip,
        'valorv'=>$request->valorv,
        'valor2'=>$request->valor2,
        'valor3'=>$request->valor3,
        'existmin'=>$request->existmin,
        'existen'=>$request->existen,
        'ultprov'=>$request->ultprov,
        'docprov'=>$request->docprov,
        'valorc'=>$request->valorc,
        'fecultact'=>$request->fecultact,
        'fcrea'=>$request->fcrea,
        'usuario'=>$request->usuario,
        'id_tipo'=>$request->id_tipo,
        'cantidad'=>$request->cantidad,
        'preciop'=>$request->preciop,
        'estado'=>$request->estado,
        'code_bar_internal'=>$request->code_bar_internal,
        'code_bar_external'=>$request->code_bar_external,
        'code_bar_upc'=>$request->code_bar_upc,
        'tentrega'=>$request->tentrega,
        'id_prov'=>$request->id_prov,
        'id_unidadm'=>$request->id_unidadm,
        'cod_aduana'=>$request->cod_aduana,
        'id_producto_codigo'=>$request->id_producto_codigo,
        'in_gestionable'=>$request->in_gestionable,
        'in_caja'=>$request->in_caja,
        'in_twistt'=>$request->in_twistt,
        'id_primaria'=>$request->id_primaria
        ]);
        return redirect('/Cruds/Productos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Productos::where('id','=',$id)->first();
        return view('crud/crudproductos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Productos::Find($id);

        $grabar->id_producto=$request->id_producto;
        $grabar->id_linea=$request->id_linea;
        $grabar->id_marca=$request->id_marca;
        $grabar->id_modelo=$request->id_modelo;
        $grabar->descrip=$request->descrip;
        $grabar->valorv=$request->valorv;
        $grabar->valor2=$request->valor2;
        $grabar->valor3=$request->valor3;
        $grabar->existmin=$request->existmin;
        $grabar->existen=$request->existen;
        $grabar->ultprov=$request->ultprov;
        $grabar->docprov=$request->docprov;
        $grabar->valorc=$request->valorc;
        $grabar->fecultact=$request->fecultact;
        $grabar->fcrea=$request->fcrea;
        $grabar->usuario=$request->usuario;
        $grabar->id_tipo=$request->id_tipo;
        $grabar->cantidad=$request->cantidad;
        $grabar->preciop=$request->preciop;
        $grabar->estado=$request->estado;
        $grabar->code_bar_internal=$request->code_bar_internal;
        $grabar->code_bar_external=$request->code_bar_external;
        $grabar->code_bar_upc=$request->code_bar_upc;
        $grabar->tentrega=$request->tentrega;
        $grabar->id_prov=$request->id_prov;
        $grabar->id_unidadm=$request->id_unidadm;
        $grabar->cod_aduana=$request->cod_aduana;
        $grabar->id_producto_codigo=$request->id_producto_codigo;
        $grabar->in_gestionable=$request->in_gestionable;
        $grabar->in_caja=$request->in_caja;
        $grabar->in_twistt=$request->in_twistt;
        $grabar->id_primaria=$request->id_primaria;

        $grabar->save();

        return redirect('/Cruds/Productos/lista');
    }

    public function destroy($id)
    {
        Productos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Productos/lista');
    }


 
}

