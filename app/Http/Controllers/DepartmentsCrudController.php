<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Departments;
use Session;
use DB;

class DepartmentsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Departments::all();
        return view('crud/cruddepartments/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Departments';
        return view('crud/cruddepartments/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Departments::create([
        'id_managements'=>$request->id_managements,
        'id_projects'=>$request->id_projects,
        'nb_department'=>$request->nb_department,
        'nb_acronym'=>$request->nb_acronym,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Departments/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Departments::where('id','=',$id)->first();
        return view('crud/cruddepartments/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Departments::Find($id);

        $grabar->id_managements=$request->id_managements;
        $grabar->id_projects=$request->id_projects;
        $grabar->nb_department=$request->nb_department;
        $grabar->nb_acronym=$request->nb_acronym;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Departments/lista');
    }

    public function destroy($id)
    {
        Departments::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Departments/lista');
    }


 
}

