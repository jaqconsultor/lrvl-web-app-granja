<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Projects;
use Session;
use DB;

class ProjectsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Projects::all();
        return view('crud/crudprojects/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Projects';
        return view('crud/crudprojects/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Projects::create([
        'nb_project'=>$request->nb_project,
        'nb_description'=>$request->nb_description,
        'nb_acronym'=>$request->nb_acronym
        ]);
        return redirect('/Cruds/Projects/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Projects::where('id','=',$id)->first();
        return view('crud/crudprojects/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Projects::Find($id);

        $grabar->nb_project=$request->nb_project;
        $grabar->nb_description=$request->nb_description;
        $grabar->nb_acronym=$request->nb_acronym;

        $grabar->save();

        return redirect('/Cruds/Projects/lista');
    }

    public function destroy($id)
    {
        Projects::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Projects/lista');
    }


 
}

