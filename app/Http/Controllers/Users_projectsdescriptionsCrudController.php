<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Users_projectsdescriptions;
use Session;
use DB;

class Users_projectsdescriptionsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Users_projectsdescriptions::all();
        return view('crud/crudusers_projectsdescriptions/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Users_projectsdescriptions';
        return view('crud/crudusers_projectsdescriptions/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Users_projectsdescriptions::create([
        'id_user'=>$request->id_user,
        'id_descripobjects'=>$request->id_descripobjects,
        'fe_vencimiento'=>$request->fe_vencimiento,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Users_projectsdescriptions/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Users_projectsdescriptions::where('id','=',$id)->first();
        return view('crud/crudusers_projectsdescriptions/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Users_projectsdescriptions::Find($id);

        $grabar->id_user=$request->id_user;
        $grabar->id_descripobjects=$request->id_descripobjects;
        $grabar->fe_vencimiento=$request->fe_vencimiento;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Users_projectsdescriptions/lista');
    }

    public function destroy($id)
    {
        Users_projectsdescriptions::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Users_projectsdescriptions/lista');
    }


 
}

