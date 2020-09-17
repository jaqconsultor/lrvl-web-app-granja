<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Usuarios_grp;
use Session;
use DB;

class Usuarios_grpCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Usuarios_grp::all();
        return view('crud/crudusuarios_grp/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Usuarios_grp';
        return view('crud/crudusuarios_grp/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Usuarios_grp::create([
        'login'=>$request->login,
        'co_grupo'=>$request->co_grupo
        ]);
        return redirect('/Cruds/Usuarios_grp/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Usuarios_grp::where('id','=',$id)->first();
        return view('crud/crudusuarios_grp/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Usuarios_grp::Find($id);

        $grabar->login=$request->login;
        $grabar->co_grupo=$request->co_grupo;

        $grabar->save();

        return redirect('/Cruds/Usuarios_grp/lista');
    }

    public function destroy($id)
    {
        Usuarios_grp::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Usuarios_grp/lista');
    }


 
}

