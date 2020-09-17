<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Productos_lineas;
use Session;
use DB;

class Productos_lineasCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Productos_lineas::all();
        return view('crud/crudproductos_lineas/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Productos_lineas';
        return view('crud/crudproductos_lineas/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Productos_lineas::create([
        'id_linea'=>$request->id_linea,
        'descrip'=>$request->descrip,
        'fcrea'=>$request->fcrea,
        'usuario'=>$request->usuario,
        'color_r'=>$request->color_r,
        'color_g'=>$request->color_g,
        'color_b'=>$request->color_b
        ]);
        return redirect('/Cruds/Productos_lineas/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Productos_lineas::where('id','=',$id)->first();
        return view('crud/crudproductos_lineas/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Productos_lineas::Find($id);

        $grabar->id_linea=$request->id_linea;
        $grabar->descrip=$request->descrip;
        $grabar->fcrea=$request->fcrea;
        $grabar->usuario=$request->usuario;
        $grabar->color_r=$request->color_r;
        $grabar->color_g=$request->color_g;
        $grabar->color_b=$request->color_b;

        $grabar->save();

        return redirect('/Cruds/Productos_lineas/lista');
    }

    public function destroy($id)
    {
        Productos_lineas::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Productos_lineas/lista');
    }


 
}

