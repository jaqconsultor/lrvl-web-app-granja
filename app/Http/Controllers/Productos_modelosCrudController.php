<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Productos_modelos;
use Session;
use DB;

class Productos_modelosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Productos_modelos::all();
        return view('crud/crudproductos_modelos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Productos_modelos';
        return view('crud/crudproductos_modelos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Productos_modelos::create([
        'id_linea'=>$request->id_linea,
        'id_marca'=>$request->id_marca,
        'id_modelo'=>$request->id_modelo,
        'descrip'=>$request->descrip,
        'fcrea'=>$request->fcrea,
        'usuario'=>$request->usuario,
        'color_r'=>$request->color_r,
        'color_g'=>$request->color_g,
        'color_b'=>$request->color_b
        ]);
        return redirect('/Cruds/Productos_modelos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Productos_modelos::where('id','=',$id)->first();
        return view('crud/crudproductos_modelos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Productos_modelos::Find($id);

        $grabar->id_linea=$request->id_linea;
        $grabar->id_marca=$request->id_marca;
        $grabar->id_modelo=$request->id_modelo;
        $grabar->descrip=$request->descrip;
        $grabar->fcrea=$request->fcrea;
        $grabar->usuario=$request->usuario;
        $grabar->color_r=$request->color_r;
        $grabar->color_g=$request->color_g;
        $grabar->color_b=$request->color_b;

        $grabar->save();

        return redirect('/Cruds/Productos_modelos/lista');
    }

    public function destroy($id)
    {
        Productos_modelos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Productos_modelos/lista');
    }


 
}

