<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Unidad_medida;
use Session;
use DB;

class Unidad_medidaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Unidad_medida::all();
        return view('crud/crudunidad_medida/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Unidad_medida';
        return view('crud/crudunidad_medida/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Unidad_medida::create([
        'nb_unidad'=>$request->nb_unidad,
        'nb_unidadm'=>$request->nb_unidadm
        ]);
        return redirect('/Cruds/Unidad_medida/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Unidad_medida::where('id','=',$id)->first();
        return view('crud/crudunidad_medida/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Unidad_medida::Find($id);

        $grabar->nb_unidad=$request->nb_unidad;
        $grabar->nb_unidadm=$request->nb_unidadm;

        $grabar->save();

        return redirect('/Cruds/Unidad_medida/lista');
    }

    public function destroy($id)
    {
        Unidad_medida::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Unidad_medida/lista');
    }


 
}

