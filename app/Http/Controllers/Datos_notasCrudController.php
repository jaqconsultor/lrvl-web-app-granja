<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Datos_notas;
use Session;
use DB;

class Datos_notasCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Datos_notas::all();
        return view('crud/cruddatos_notas/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Datos_notas';
        return view('crud/cruddatos_notas/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Datos_notas::create([
        'fe_registro'=>$request->fe_registro,
        'id_control'=>$request->id_control,
        'tx_nota'=>$request->tx_nota,
        'tx_usu_crea'=>$request->tx_usu_crea,
        'tx_usu_ver'=>$request->tx_usu_ver,
        'in_leido'=>$request->in_leido
        ]);
        return redirect('/Cruds/Datos_notas/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Datos_notas::where('id','=',$id)->first();
        return view('crud/cruddatos_notas/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Datos_notas::Find($id);

        $grabar->fe_registro=$request->fe_registro;
        $grabar->id_control=$request->id_control;
        $grabar->tx_nota=$request->tx_nota;
        $grabar->tx_usu_crea=$request->tx_usu_crea;
        $grabar->tx_usu_ver=$request->tx_usu_ver;
        $grabar->in_leido=$request->in_leido;

        $grabar->save();

        return redirect('/Cruds/Datos_notas/lista');
    }

    public function destroy($id)
    {
        Datos_notas::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Datos_notas/lista');
    }


 
}

