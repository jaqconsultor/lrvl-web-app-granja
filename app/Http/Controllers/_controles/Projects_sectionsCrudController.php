<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Projects_sections;
use Session;
use DB;

class Projects_sectionsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Projects_sections::all();
        return view('crud/crudprojects_sections/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Projects_sections';
        return view('crud/crudprojects_sections/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Projects_sections::create([
        'id_projects'=>$request->id_projects,
        'nb_sections'=>$request->nb_sections,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Projects_sections/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Projects_sections::where('id','=',$id)->first();
        return view('crud/crudprojects_sections/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Projects_sections::Find($id);

        $grabar->id_projects=$request->id_projects;
        $grabar->nb_sections=$request->nb_sections;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Projects_sections/lista');
    }

    public function destroy($id)
    {
        Projects_sections::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Projects_sections/lista');
    }


 
}

