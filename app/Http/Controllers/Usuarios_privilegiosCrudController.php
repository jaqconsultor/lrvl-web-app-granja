<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Usuarios_privilegios;
use Session;
use DB;

class Usuarios_privilegiosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Usuarios_privilegios::all();
        return view('crud/crudusuarios_privilegios/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Usuarios_privilegios';
        return view('crud/crudusuarios_privilegios/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Usuarios_privilegios::create([
        'login'=>$request->login,
        'codigo'=>$request->codigo,
        'nombre'=>$request->nombre,
        'opcion'=>$request->opcion,
        'estado'=>$request->estado
        ]);
        return redirect('/Cruds/Usuarios_privilegios/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Usuarios_privilegios::where('id','=',$id)->first();
        return view('crud/crudusuarios_privilegios/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Usuarios_privilegios::Find($id);

        $grabar->login=$request->login;
        $grabar->codigo=$request->codigo;
        $grabar->nombre=$request->nombre;
        $grabar->opcion=$request->opcion;
        $grabar->estado=$request->estado;

        $grabar->save();

        return redirect('/Cruds/Usuarios_privilegios/lista');
    }

    public function destroy($id)
    {
        Usuarios_privilegios::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Usuarios_privilegios/lista');
    }


 
}

