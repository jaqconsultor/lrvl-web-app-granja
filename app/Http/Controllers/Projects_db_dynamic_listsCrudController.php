<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Projects_db_dynamic_lists;
use Session;
use DB;

class Projects_db_dynamic_listsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Projects_db_dynamic_lists::all();
        return view('crud/crudprojects_db_dynamic_lists/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Projects_db_dynamic_lists';
        return view('crud/crudprojects_db_dynamic_lists/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Projects_db_dynamic_lists::create([
        'id_projects_databases'=>$request->id_projects_databases,
        'id_projects'=>$request->id_projects,
        'nb_lists'=>$request->nb_lists,
        'co_lists'=>$request->co_lists,
        'nb_descripcion'=>$request->nb_descripcion
        ]);
        return redirect('/Cruds/Projects_db_dynamic_lists/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Projects_db_dynamic_lists::where('id','=',$id)->first();
        return view('crud/crudprojects_db_dynamic_lists/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Projects_db_dynamic_lists::Find($id);

        $grabar->id_projects_databases=$request->id_projects_databases;
        $grabar->id_projects=$request->id_projects;
        $grabar->nb_lists=$request->nb_lists;
        $grabar->co_lists=$request->co_lists;
        $grabar->nb_descripcion=$request->nb_descripcion;

        $grabar->save();

        return redirect('/Cruds/Projects_db_dynamic_lists/lista');
    }

    public function destroy($id)
    {
        Projects_db_dynamic_lists::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Projects_db_dynamic_lists/lista');
    }


 
}

