<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Inv_ficha;
use Session;
use DB;

class Inv_fichaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Inv_ficha::all();
        return view('crud/crudinv_ficha/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Inv_ficha';
        return view('crud/crudinv_ficha/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Inv_ficha::create([
        'nu_codebar'=>$request->nu_codebar,
        'id_producto'=>$request->id_producto,
        'fe_fecha'=>$request->fe_fecha,
        'nu_sumacantidad'=>$request->nu_sumacantidad
        ]);
        return redirect('/Cruds/Inv_ficha/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Inv_ficha::where('id','=',$id)->first();
        return view('crud/crudinv_ficha/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Inv_ficha::Find($id);

        $grabar->nu_codebar=$request->nu_codebar;
        $grabar->id_producto=$request->id_producto;
        $grabar->fe_fecha=$request->fe_fecha;
        $grabar->nu_sumacantidad=$request->nu_sumacantidad;

        $grabar->save();

        return redirect('/Cruds/Inv_ficha/lista');
    }

    public function destroy($id)
    {
        Inv_ficha::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Inv_ficha/lista');
    }


 
}

