<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Profiles_projects_descriptions;
use Session;
use DB;

class Profiles_projects_descriptionsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Profiles_projects_descriptions::all();
        return view('crud/crudprofiles_projects_descriptions/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Profiles_projects_descriptions';
        return view('crud/crudprofiles_projects_descriptions/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Profiles_projects_descriptions::create([
        'id_profiles'=>$request->id_profiles,
        'id_descriptions_objects'=>$request->id_descriptions_objects,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Profiles_projects_descriptions/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Profiles_projects_descriptions::where('id','=',$id)->first();
        return view('crud/crudprofiles_projects_descriptions/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Profiles_projects_descriptions::Find($id);

        $grabar->id_profiles=$request->id_profiles;
        $grabar->id_descriptions_objects=$request->id_descriptions_objects;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Profiles_projects_descriptions/lista');
    }

    public function destroy($id)
    {
        Profiles_projects_descriptions::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Profiles_projects_descriptions/lista');
    }


 
}

