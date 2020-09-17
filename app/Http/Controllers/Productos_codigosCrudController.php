<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Productos_codigos;
use Session;
use DB;

class Productos_codigosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Productos_codigos::all();
        return view('crud/crudproductos_codigos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Productos_codigos';
        return view('crud/crudproductos_codigos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Productos_codigos::create([
        'cod_producto'=>$request->cod_producto,
        'nb_producto'=>$request->nb_producto
        ]);
        return redirect('/Cruds/Productos_codigos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Productos_codigos::where('id','=',$id)->first();
        return view('crud/crudproductos_codigos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Productos_codigos::Find($id);

        $grabar->cod_producto=$request->cod_producto;
        $grabar->nb_producto=$request->nb_producto;

        $grabar->save();

        return redirect('/Cruds/Productos_codigos/lista');
    }

    public function destroy($id)
    {
        Productos_codigos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Productos_codigos/lista');
    }


 
}

