<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Projects_db_cruds;
use Session;
use DB;

class Projects_db_crudsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Projects_db_cruds::all();
        return view('crud/crudprojects_db_cruds/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Projects_db_cruds';
        return view('crud/crudprojects_db_cruds/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Projects_db_cruds::create([
        'id_projects_databases'=>$request->id_projects_databases,
        'id_projects'=>$request->id_projects,
        'nb_cruds'=>$request->nb_cruds,
        'nb_owner'=>$request->nb_owner,
        'nb_tabla'=>$request->nb_tabla,
        'nb_campo'=>$request->nb_campo,
        'id_type_of_fields'=>$request->id_type_of_fields,
        'tx_tipo_de_llenado'=>$request->tx_tipo_de_llenado
        ]);
        return redirect('/Cruds/Projects_db_cruds/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Projects_db_cruds::where('id','=',$id)->first();
        return view('crud/crudprojects_db_cruds/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Projects_db_cruds::Find($id);

        $grabar->id_projects_databases=$request->id_projects_databases;
        $grabar->id_projects=$request->id_projects;
        $grabar->nb_cruds=$request->nb_cruds;
        $grabar->nb_owner=$request->nb_owner;
        $grabar->nb_tabla=$request->nb_tabla;
        $grabar->nb_campo=$request->nb_campo;
        $grabar->id_type_of_fields=$request->id_type_of_fields;
        $grabar->tx_tipo_de_llenado=$request->tx_tipo_de_llenado;

        $grabar->save();

        return redirect('/Cruds/Projects_db_cruds/lista');
    }

    public function destroy($id)
    {
        Projects_db_cruds::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Projects_db_cruds/lista');
    }


 
}

