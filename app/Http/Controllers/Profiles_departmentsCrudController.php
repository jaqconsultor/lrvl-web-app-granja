<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Profiles_departments;
use Session;
use DB;

class Profiles_departmentsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Profiles_departments::all();
        return view('crud/crudprofiles_departments/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Profiles_departments';
        return view('crud/crudprofiles_departments/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Profiles_departments::create([
        'id_profiles'=>$request->id_profiles,
        'id_departments'=>$request->id_departments
        ]);
        return redirect('/Cruds/Profiles_departments/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Profiles_departments::where('id','=',$id)->first();
        return view('crud/crudprofiles_departments/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Profiles_departments::Find($id);

        $grabar->id_profiles=$request->id_profiles;
        $grabar->id_departments=$request->id_departments;

        $grabar->save();

        return redirect('/Cruds/Profiles_departments/lista');
    }

    public function destroy($id)
    {
        Profiles_departments::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Profiles_departments/lista');
    }


 
}

