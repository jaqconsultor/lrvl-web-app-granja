<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Inv_archivos;
use Session;
use DB;

class Inv_archivosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Inv_archivos::all();
        return view('crud/crudinv_archivos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Inv_archivos';
        return view('crud/crudinv_archivos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Inv_archivos::create([
        'nb_archivo'=>$request->nb_archivo,
        'fe_carga'=>$request->fe_carga,
        'in_activo'=>$request->in_activo
        ]);
        return redirect('/Cruds/Inv_archivos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Inv_archivos::where('id','=',$id)->first();
        return view('crud/crudinv_archivos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Inv_archivos::Find($id);

        $grabar->nb_archivo=$request->nb_archivo;
        $grabar->fe_carga=$request->fe_carga;
        $grabar->in_activo=$request->in_activo;

        $grabar->save();

        return redirect('/Cruds/Inv_archivos/lista');
    }

    public function destroy($id)
    {
        Inv_archivos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Inv_archivos/lista');
    }


 
}

