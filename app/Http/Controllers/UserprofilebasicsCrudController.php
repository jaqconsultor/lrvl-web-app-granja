<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Userprofilebasics;
use Session;
use DB;

class UserprofilebasicsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Userprofilebasics::all();
        return view('crud/cruduserprofilebasics/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Userprofilebasics';
        return view('crud/cruduserprofilebasics/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Userprofilebasics::create([
        'id_user'=>$request->id_user
        ]);
        return redirect('/Cruds/Userprofilebasics/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Userprofilebasics::where('id','=',$id)->first();
        return view('crud/cruduserprofilebasics/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Userprofilebasics::Find($id);

        $grabar->id_user=$request->id_user;

        $grabar->save();

        return redirect('/Cruds/Userprofilebasics/lista');
    }

    public function destroy($id)
    {
        Userprofilebasics::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Userprofilebasics/lista');
    }


 
}

