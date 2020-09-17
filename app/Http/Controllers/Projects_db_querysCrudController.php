<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Projects_db_querys;
use Session;
use DB;

class Projects_db_querysCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Projects_db_querys::all();
        return view('crud/crudprojects_db_querys/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Projects_db_querys';
        return view('crud/crudprojects_db_querys/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Projects_db_querys::create([
        'id_projects_databases'=>$request->id_projects_databases,
        'id_projects'=>$request->id_projects,
        'in_activerecord'=>$request->in_activerecord,
        'tx_description'=>$request->tx_description,
        'tx_sql'=>$request->tx_sql,
        'in_ejecuted'=>$request->in_ejecuted
        ]);
        return redirect('/Cruds/Projects_db_querys/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Projects_db_querys::where('id','=',$id)->first();
        return view('crud/crudprojects_db_querys/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Projects_db_querys::Find($id);

        $grabar->id_projects_databases=$request->id_projects_databases;
        $grabar->id_projects=$request->id_projects;
        $grabar->in_activerecord=$request->in_activerecord;
        $grabar->tx_description=$request->tx_description;
        $grabar->tx_sql=$request->tx_sql;
        $grabar->in_ejecuted=$request->in_ejecuted;

        $grabar->save();

        return redirect('/Cruds/Projects_db_querys/lista');
    }

    public function destroy($id)
    {
        Projects_db_querys::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Projects_db_querys/lista');
    }


 
}

