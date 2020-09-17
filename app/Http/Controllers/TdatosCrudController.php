<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Tdatos;
use Session;
use DB;

class TdatosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Tdatos::all();
        return view('crud/crudtdatos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Tdatos';
        return view('crud/crudtdatos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Tdatos::create([
        'control'=>$request->control,
        'fecha'=>$request->fecha,
        'factura'=>$request->factura,
        'comande'=>$request->comande,
        'cliente'=>$request->cliente,
        'chofer'=>$request->chofer,
        'pal_azul_138'=>$request->pal_azul_138,
        'pal_amari_138'=>$request->pal_amari_138,
        'pal_azul_116'=>$request->pal_azul_116,
        'pal_amari_116'=>$request->pal_amari_116,
        'tot_138'=>$request->tot_138,
        'tot_116'=>$request->tot_116,
        'lugar'=>$request->lugar,
        'camion'=>$request->camion,
        'ver_doc'=>$request->ver_doc,
        'ref_ext'=>$request->ref_ext,
        'retorno'=>$request->retorno
        ]);
        return redirect('/Cruds/Tdatos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Tdatos::where('id','=',$id)->first();
        return view('crud/crudtdatos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Tdatos::Find($id);

        $grabar->control=$request->control;
        $grabar->fecha=$request->fecha;
        $grabar->factura=$request->factura;
        $grabar->comande=$request->comande;
        $grabar->cliente=$request->cliente;
        $grabar->chofer=$request->chofer;
        $grabar->pal_azul_138=$request->pal_azul_138;
        $grabar->pal_amari_138=$request->pal_amari_138;
        $grabar->pal_azul_116=$request->pal_azul_116;
        $grabar->pal_amari_116=$request->pal_amari_116;
        $grabar->tot_138=$request->tot_138;
        $grabar->tot_116=$request->tot_116;
        $grabar->lugar=$request->lugar;
        $grabar->camion=$request->camion;
        $grabar->ver_doc=$request->ver_doc;
        $grabar->ref_ext=$request->ref_ext;
        $grabar->retorno=$request->retorno;

        $grabar->save();

        return redirect('/Cruds/Tdatos/lista');
    }

    public function destroy($id)
    {
        Tdatos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Tdatos/lista');
    }


 
}

