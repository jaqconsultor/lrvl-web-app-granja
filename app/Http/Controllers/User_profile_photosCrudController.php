<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User_profile_photos;
use Session;
use DB;

class User_profile_photosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=User_profile_photos::all();
        return view('crud/cruduser_profile_photos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear User_profile_photos';
        return view('crud/cruduser_profile_photos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        User_profile_photos::create([
        'tx_photofile'=>$request->tx_photofile,
        'id_users'=>$request->id_users
        ]);
        return redirect('/Cruds/User_profile_photos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=User_profile_photos::where('id','=',$id)->first();
        return view('crud/cruduser_profile_photos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=User_profile_photos::Find($id);

        $grabar->tx_photofile=$request->tx_photofile;
        $grabar->id_users=$request->id_users;

        $grabar->save();

        return redirect('/Cruds/User_profile_photos/lista');
    }

    public function destroy($id)
    {
        User_profile_photos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/User_profile_photos/lista');
    }


 
}

