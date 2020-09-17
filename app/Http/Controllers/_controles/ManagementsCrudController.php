<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Managements;
use Session;
use DB;

class ManagementsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Managements::all();
        return view('crud/crudmanagements/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Managements';
        return view('crud/crudmanagements/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Managements::create([
        'id_projects'=>$request->id_projects,
        'nb_management'=>$request->nb_management,
        'nb_acronym'=>$request->nb_acronym,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Managements/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Managements::where('id','=',$id)->first();
        return view('crud/crudmanagements/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Managements::Find($id);

        $grabar->id_projects=$request->id_projects;
        $grabar->nb_management=$request->nb_management;
        $grabar->nb_acronym=$request->nb_acronym;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Managements/lista');
    }

    public function destroy($id)
    {
        Managements::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Managements/lista');
    }


 
}

