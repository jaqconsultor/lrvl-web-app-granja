<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Parameters_generals_users;
use Session;
use DB;

class Parameters_generals_usersCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Parameters_generals_users::all();
        return view('crud/crudparameters_generals_users/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Parameters_generals_users';
        return view('crud/crudparameters_generals_users/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Parameters_generals_users::create([
        'id_projects'=>$request->id_projects,
        'id_projects_modules'=>$request->id_projects_modules,
        'id_projects_sections'=>$request->id_projects_sections,
        'nb_parameter'=>$request->nb_parameter,
        'tx_value'=>$request->tx_value,
        'tx_description'=>$request->tx_description
        ]);
        return redirect('/Cruds/Parameters_generals_users/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Parameters_generals_users::where('id','=',$id)->first();
        return view('crud/crudparameters_generals_users/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Parameters_generals_users::Find($id);

        $grabar->id_projects=$request->id_projects;
        $grabar->id_projects_modules=$request->id_projects_modules;
        $grabar->id_projects_sections=$request->id_projects_sections;
        $grabar->nb_parameter=$request->nb_parameter;
        $grabar->tx_value=$request->tx_value;
        $grabar->tx_description=$request->tx_description;

        $grabar->save();

        return redirect('/Cruds/Parameters_generals_users/lista');
    }

    public function destroy($id)
    {
        Parameters_generals_users::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Parameters_generals_users/lista');
    }


 
}

