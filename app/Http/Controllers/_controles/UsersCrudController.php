<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Users;
use Session;
use DB;

class UsersCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Users::all();
        return view('crud/crudusers/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Users';
        return view('crud/crudusers/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Users::create([
        'login'=>$request->login,
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'remember_token'=>$request->remember_token,
        'in_verified'=>$request->in_verified,
        'in_firstime'=>$request->in_firstime,
        'email_verified_at'=>$request->email_verified_at,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Users/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Users::where('id','=',$id)->first();
        return view('crud/crudusers/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Users::Find($id);

        $grabar->login=$request->login;
        $grabar->name=$request->name;
        $grabar->email=$request->email;
        $grabar->password=$request->password;
        $grabar->remember_token=$request->remember_token;
        $grabar->in_verified=$request->in_verified;
        $grabar->in_firstime=$request->in_firstime;
        $grabar->email_verified_at=$request->email_verified_at;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Users/lista');
    }

    public function destroy($id)
    {
        Users::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Users/lista');
    }


 
}

