<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Users_profiles;
use Session;
use DB;

class Users_profilesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Users_profiles::all();
        return view('crud/crudusers_profiles/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Users_profiles';
        return view('crud/crudusers_profiles/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Users_profiles::create([
        'id_user'=>$request->id_user,
        'id_profile'=>$request->id_profile,
        'fe_vencimiento'=>$request->fe_vencimiento,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Users_profiles/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Users_profiles::where('id','=',$id)->first();
        return view('crud/crudusers_profiles/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Users_profiles::Find($id);

        $grabar->id_user=$request->id_user;
        $grabar->id_profile=$request->id_profile;
        $grabar->fe_vencimiento=$request->fe_vencimiento;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Users_profiles/lista');
    }

    public function destroy($id)
    {
        Users_profiles::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Users_profiles/lista');
    }


 
}

