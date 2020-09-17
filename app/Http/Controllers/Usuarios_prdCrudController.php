<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Usuarios_prd;
use Session;
use DB;

class Usuarios_prdCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Usuarios_prd::all();
        return view('crud/crudusuarios_prd/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Usuarios_prd';
        return view('crud/crudusuarios_prd/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Usuarios_prd::create([
        'login'=>$request->login,
        'codigoprd'=>$request->codigoprd
        ]);
        return redirect('/Cruds/Usuarios_prd/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Usuarios_prd::where('id','=',$id)->first();
        return view('crud/crudusuarios_prd/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Usuarios_prd::Find($id);

        $grabar->login=$request->login;
        $grabar->codigoprd=$request->codigoprd;

        $grabar->save();

        return redirect('/Cruds/Usuarios_prd/lista');
    }

    public function destroy($id)
    {
        Usuarios_prd::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Usuarios_prd/lista');
    }


 
}

