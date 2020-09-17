<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Camion;
use Session;
use DB;

class CamionCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Camion::all();
        return view('crud/crudcamion/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Camion';
        return view('crud/crudcamion/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Camion::create([
        'nb_camion'=>$request->nb_camion
        ]);
        return redirect('/Cruds/Camion/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Camion::where('id','=',$id)->first();
        return view('crud/crudcamion/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Camion::Find($id);

        $grabar->nb_camion=$request->nb_camion;

        $grabar->save();

        return redirect('/Cruds/Camion/lista');
    }

    public function destroy($id)
    {
        Camion::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Camion/lista');
    }


 
}

