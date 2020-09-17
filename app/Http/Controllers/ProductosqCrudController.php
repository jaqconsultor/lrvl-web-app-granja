<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Productosq;
use Session;
use DB;

class ProductosqCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Productosq::all();
        return view('crud/crudproductosq/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Productosq';
        return view('crud/crudproductosq/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Productosq::create([
        'codigoprd'=>$request->codigoprd,
        'nombreprd'=>$request->nombreprd,
        'memo'=>$request->memo,
        'memo2'=>$request->memo2,
        'co_solicitud'=>$request->co_solicitud,
        'co_aprobado'=>$request->co_aprobado,
        'fecha_aprobado'=>$request->fecha_aprobado,
        'id_mit'=>$request->id_mit,
        'id_origen'=>$request->id_origen
        ]);
        return redirect('/Cruds/Productosq/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Productosq::where('id','=',$id)->first();
        return view('crud/crudproductosq/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Productosq::Find($id);

        $grabar->codigoprd=$request->codigoprd;
        $grabar->nombreprd=$request->nombreprd;
        $grabar->memo=$request->memo;
        $grabar->memo2=$request->memo2;
        $grabar->co_solicitud=$request->co_solicitud;
        $grabar->co_aprobado=$request->co_aprobado;
        $grabar->fecha_aprobado=$request->fecha_aprobado;
        $grabar->id_mit=$request->id_mit;
        $grabar->id_origen=$request->id_origen;

        $grabar->save();

        return redirect('/Cruds/Productosq/lista');
    }

    public function destroy($id)
    {
        Productosq::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Productosq/lista');
    }


 
}

