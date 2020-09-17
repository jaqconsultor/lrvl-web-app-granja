<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User_profile_basics;
use Session;
use DB;

class User_profile_basicsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=User_profile_basics::all();
        return view('crud/cruduser_profile_basics/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear User_profile_basics';
        return view('crud/cruduser_profile_basics/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        User_profile_basics::create([
        'id_users'=>$request->id_users
        ]);
        return redirect('/Cruds/User_profile_basics/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=User_profile_basics::where('id','=',$id)->first();
        return view('crud/cruduser_profile_basics/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=User_profile_basics::Find($id);

        $grabar->id_users=$request->id_users;

        $grabar->save();

        return redirect('/Cruds/User_profile_basics/lista');
    }

    public function destroy($id)
    {
        User_profile_basics::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/User_profile_basics/lista');
    }


 
}

