<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Aereolineas;
use Session;
use DB;

class AereolineasCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Aereolineas::all();
        return view('crud/crudaereolineas/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Aereolineas';
        return view('crud/crudaereolineas/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Aereolineas::create([
        'nb_aereolinea'=>$request->nb_aereolinea,
        'code_aereo'=>$request->code_aereo,
        'm_tarifa'=>$request->m_tarifa
        ]);
        return redirect('/Cruds/Aereolineas/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Aereolineas::where('id','=',$id)->first();
        return view('crud/crudaereolineas/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Aereolineas::Find($id);

        $grabar->nb_aereolinea=$request->nb_aereolinea;
        $grabar->code_aereo=$request->code_aereo;
        $grabar->m_tarifa=$request->m_tarifa;

        $grabar->save();

        return redirect('/Cruds/Aereolineas/lista');
    }

    public function destroy($id)
    {
        Aereolineas::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Aereolineas/lista');
    }


 
}

