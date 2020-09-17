<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Productos_marcas;
use Session;
use DB;

class Productos_marcasCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Productos_marcas::all();
        return view('crud/crudproductos_marcas/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Productos_marcas';
        return view('crud/crudproductos_marcas/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Productos_marcas::create([
        'id_linea'=>$request->id_linea,
        'id_marca'=>$request->id_marca,
        'descrip'=>$request->descrip,
        'fcrea'=>$request->fcrea,
        'usuario'=>$request->usuario,
        'color_r'=>$request->color_r,
        'color_g'=>$request->color_g,
        'color_b'=>$request->color_b
        ]);
        return redirect('/Cruds/Productos_marcas/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Productos_marcas::where('id','=',$id)->first();
        return view('crud/crudproductos_marcas/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Productos_marcas::Find($id);

        $grabar->id_linea=$request->id_linea;
        $grabar->id_marca=$request->id_marca;
        $grabar->descrip=$request->descrip;
        $grabar->fcrea=$request->fcrea;
        $grabar->usuario=$request->usuario;
        $grabar->color_r=$request->color_r;
        $grabar->color_g=$request->color_g;
        $grabar->color_b=$request->color_b;

        $grabar->save();

        return redirect('/Cruds/Productos_marcas/lista');
    }

    public function destroy($id)
    {
        Productos_marcas::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Productos_marcas/lista');
    }


 
}

