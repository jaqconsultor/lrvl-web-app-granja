<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Usuarios;
use Session;
use DB;

class UsuariosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Usuarios::all();
        return view('crud/crudusuarios/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Usuarios';
        return view('crud/crudusuarios/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Usuarios::create([
        'login'=>$request->login,
        'nomusuario'=>$request->nomusuario,
        'claveusuario'=>$request->claveusuario,
        'condusuario'=>$request->condusuario,
        'nuevo'=>$request->nuevo,
        'activo'=>$request->activo,
        'in_licencia'=>$request->in_licencia
        ]);
        return redirect('/Cruds/Usuarios/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Usuarios::where('id','=',$id)->first();
        return view('crud/crudusuarios/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Usuarios::Find($id);

        $grabar->login=$request->login;
        $grabar->nomusuario=$request->nomusuario;
        $grabar->claveusuario=$request->claveusuario;
        $grabar->condusuario=$request->condusuario;
        $grabar->nuevo=$request->nuevo;
        $grabar->activo=$request->activo;
        $grabar->in_licencia=$request->in_licencia;

        $grabar->save();

        return redirect('/Cruds/Usuarios/lista');
    }

    public function destroy($id)
    {
        Usuarios::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Usuarios/lista');
    }


 
}

