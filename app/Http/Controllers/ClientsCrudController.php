<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Clients;
use Session;
use DB;

class ClientsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Clients::all();
        return view('crud/crudclients/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Clients';
        return view('crud/crudclients/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Clients::create([
        'nb_clients'=>$request->nb_clients,
        'in_tipo_cli'=>$request->in_tipo_cli,
        'tx_direccion'=>$request->tx_direccion,
        'tx_direccion1'=>$request->tx_direccion1,
        'tx_direccion2'=>$request->tx_direccion2,
        'tx_direccion3'=>$request->tx_direccion3,
        'tx_direccion4'=>$request->tx_direccion4,
        'tx_direccion5'=>$request->tx_direccion5,
        'nb_contacto'=>$request->nb_contacto,
        'nu_cod_referencia'=>$request->nu_cod_referencia,
        'nu_telefono1'=>$request->nu_telefono1,
        'nu_telefono2'=>$request->nu_telefono2,
        'in_transport'=>$request->in_transport
        ]);
        return redirect('/Cruds/Clients/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Clients::where('id','=',$id)->first();
        return view('crud/crudclients/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Clients::Find($id);

        $grabar->nb_clients=$request->nb_clients;
        $grabar->in_tipo_cli=$request->in_tipo_cli;
        $grabar->tx_direccion=$request->tx_direccion;
        $grabar->tx_direccion1=$request->tx_direccion1;
        $grabar->tx_direccion2=$request->tx_direccion2;
        $grabar->tx_direccion3=$request->tx_direccion3;
        $grabar->tx_direccion4=$request->tx_direccion4;
        $grabar->tx_direccion5=$request->tx_direccion5;
        $grabar->nb_contacto=$request->nb_contacto;
        $grabar->nu_cod_referencia=$request->nu_cod_referencia;
        $grabar->nu_telefono1=$request->nu_telefono1;
        $grabar->nu_telefono2=$request->nu_telefono2;
        $grabar->in_transport=$request->in_transport;

        $grabar->save();

        return redirect('/Cruds/Clients/lista');
    }

    public function destroy($id)
    {
        Clients::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Clients/lista');
    }


 
}

