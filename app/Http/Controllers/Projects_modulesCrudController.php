<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Projects_modules;
use Session;
use DB;

class Projects_modulesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Projects_modules::all();
        return view('crud/crudprojects_modules/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Projects_modules';
        return view('crud/crudprojects_modules/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Projects_modules::create([
        'id_projects'=>$request->id_projects,
        'nb_module'=>$request->nb_module,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Projects_modules/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Projects_modules::where('id','=',$id)->first();
        return view('crud/crudprojects_modules/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Projects_modules::Find($id);

        $grabar->id_projects=$request->id_projects;
        $grabar->nb_module=$request->nb_module;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Projects_modules/lista');
    }

    public function destroy($id)
    {
        Projects_modules::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Projects_modules/lista');
    }


 
}

