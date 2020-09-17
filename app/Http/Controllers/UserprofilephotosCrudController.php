<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Userprofilephotos;
use Session;
use DB;

class UserprofilephotosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Userprofilephotos::all();
        return view('crud/cruduserprofilephotos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Userprofilephotos';
        return view('crud/cruduserprofilephotos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Userprofilephotos::create([
        'tx_photofile'=>$request->tx_photofile,
        'id_user'=>$request->id_user,
        'in_verified'=>$request->in_verified
        ]);
        return redirect('/Cruds/Userprofilephotos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Userprofilephotos::where('id','=',$id)->first();
        return view('crud/cruduserprofilephotos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Userprofilephotos::Find($id);

        $grabar->tx_photofile=$request->tx_photofile;
        $grabar->id_user=$request->id_user;
        $grabar->in_verified=$request->in_verified;

        $grabar->save();

        return redirect('/Cruds/Userprofilephotos/lista');
    }

    public function destroy($id)
    {
        Userprofilephotos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Userprofilephotos/lista');
    }


 
}

