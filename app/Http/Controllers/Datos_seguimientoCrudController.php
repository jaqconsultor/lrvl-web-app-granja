<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Datos_seguimiento;
use Session;
use DB;

class Datos_seguimientoCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Datos_seguimiento::all();
        return view('crud/cruddatos_seguimiento/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Datos_seguimiento';
        return view('crud/cruddatos_seguimiento/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Datos_seguimiento::create([
        'fe_registro'=>$request->fe_registro,
        'id_control'=>$request->id_control,
        'in_estado'=>$request->in_estado,
        'tx_lugar'=>$request->tx_lugar,
        'tx_temperatura'=>$request->tx_temperatura,
        'in_temperatura'=>$request->in_temperatura,
        'tx_nota'=>$request->tx_nota,
        'tx_usu_crea'=>$request->tx_usu_crea
        ]);
        return redirect('/Cruds/Datos_seguimiento/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Datos_seguimiento::where('id','=',$id)->first();
        return view('crud/cruddatos_seguimiento/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Datos_seguimiento::Find($id);

        $grabar->fe_registro=$request->fe_registro;
        $grabar->id_control=$request->id_control;
        $grabar->in_estado=$request->in_estado;
        $grabar->tx_lugar=$request->tx_lugar;
        $grabar->tx_temperatura=$request->tx_temperatura;
        $grabar->in_temperatura=$request->in_temperatura;
        $grabar->tx_nota=$request->tx_nota;
        $grabar->tx_usu_crea=$request->tx_usu_crea;

        $grabar->save();

        return redirect('/Cruds/Datos_seguimiento/lista');
    }

    public function destroy($id)
    {
        Datos_seguimiento::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Datos_seguimiento/lista');
    }


 
}

