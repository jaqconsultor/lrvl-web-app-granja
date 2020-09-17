<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Projects_databases;
use Session;
use DB;

class Projects_databasesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Projects_databases::all();
        return view('crud/crudprojects_databases/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Projects_databases';
        return view('crud/crudprojects_databases/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Projects_databases::create([
        'id_projects'=>$request->id_projects,
        'id_projects_modules'=>$request->id_projects_modules,
        'id_projects_sections'=>$request->id_projects_sections,
        'nb_databases'=>$request->nb_databases,
        'nb_acronym'=>$request->nb_acronym
        ]);
        return redirect('/Cruds/Projects_databases/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Projects_databases::where('id','=',$id)->first();
        return view('crud/crudprojects_databases/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Projects_databases::Find($id);

        $grabar->id_projects=$request->id_projects;
        $grabar->id_projects_modules=$request->id_projects_modules;
        $grabar->id_projects_sections=$request->id_projects_sections;
        $grabar->nb_databases=$request->nb_databases;
        $grabar->nb_acronym=$request->nb_acronym;

        $grabar->save();

        return redirect('/Cruds/Projects_databases/lista');
    }

    public function destroy($id)
    {
        Projects_databases::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Projects_databases/lista');
    }


 
}

