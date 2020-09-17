<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Projects_descriptions;
use Session;
use DB;

class Projects_descriptionsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Projects_descriptions::all();
        return view('crud/crudprojects_descriptions/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Projects_descriptions';
        return view('crud/crudprojects_descriptions/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Projects_descriptions::create([
        'id_projects_modules'=>$request->id_projects_modules,
        'id_projects_sections'=>$request->id_projects_sections,
        'id_type_of_objs'=>$request->id_type_of_objs,
        'id_projects'=>$request->id_projects,
        'id_destination'=>$request->id_destination,
        'id_type_of_destination'=>$request->id_type_of_destination,
        'nu_order'=>$request->nu_order,
        'nu_order1'=>$request->nu_order1,
        'nu_order2'=>$request->nu_order2,
        'tx_fir_option'=>$request->tx_fir_option,
        'tx_sec_option'=>$request->tx_sec_option,
        'tx_thi_option'=>$request->tx_thi_option,
        'tx_description'=>$request->tx_description,
        'tx_icon'=>$request->tx_icon,
        'tx_destination'=>$request->tx_destination,
        'nb_parameter'=>$request->nb_parameter,
        'tx_value_parameter'=>$request->tx_value_parameter
        ]);
        return redirect('/Cruds/Projects_descriptions/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Projects_descriptions::where('id','=',$id)->first();
        return view('crud/crudprojects_descriptions/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Projects_descriptions::Find($id);

        $grabar->id_projects_modules=$request->id_projects_modules;
        $grabar->id_projects_sections=$request->id_projects_sections;
        $grabar->id_type_of_objs=$request->id_type_of_objs;
        $grabar->id_projects=$request->id_projects;
        $grabar->id_destination=$request->id_destination;
        $grabar->id_type_of_destination=$request->id_type_of_destination;
        $grabar->nu_order=$request->nu_order;
        $grabar->nu_order1=$request->nu_order1;
        $grabar->nu_order2=$request->nu_order2;
        $grabar->tx_fir_option=$request->tx_fir_option;
        $grabar->tx_sec_option=$request->tx_sec_option;
        $grabar->tx_thi_option=$request->tx_thi_option;
        $grabar->tx_description=$request->tx_description;
        $grabar->tx_icon=$request->tx_icon;
        $grabar->tx_destination=$request->tx_destination;
        $grabar->nb_parameter=$request->nb_parameter;
        $grabar->tx_value_parameter=$request->tx_value_parameter;

        $grabar->save();

        return redirect('/Cruds/Projects_descriptions/lista');
    }

    public function destroy($id)
    {
        Projects_descriptions::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Projects_descriptions/lista');
    }


 
}

