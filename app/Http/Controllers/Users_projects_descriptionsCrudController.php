<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Users_projects_descriptions;
use Session;
use DB;

class Users_projects_descriptionsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Users_projects_descriptions::all();
        return view('crud/crudusers_projects_descriptions/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Users_projects_descriptions';
        return view('crud/crudusers_projects_descriptions/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Users_projects_descriptions::create([
        'id_users'=>$request->id_users,
        'id_projects_descriptions'=>$request->id_projects_descriptions,
        'fe_vencimiento'=>$request->fe_vencimiento,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Users_projects_descriptions/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Users_projects_descriptions::where('id','=',$id)->first();
        return view('crud/crudusers_projects_descriptions/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Users_projects_descriptions::Find($id);

        $grabar->id_users=$request->id_users;
        $grabar->id_projects_descriptions=$request->id_projects_descriptions;
        $grabar->fe_vencimiento=$request->fe_vencimiento;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Users_projects_descriptions/lista');
    }

    public function destroy($id)
    {
        Users_projects_descriptions::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Users_projects_descriptions/lista');
    }


 
}

