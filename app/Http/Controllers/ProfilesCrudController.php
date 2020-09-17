<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Profiles;
use Session;
use DB;

class ProfilesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Profiles::all();
        return view('crud/crudprofiles/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Profiles';
        return view('crud/crudprofiles/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Profiles::create([
        'nb_profile'=>$request->nb_profile,
        'tx_description'=>$request->tx_description,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Profiles/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Profiles::where('id','=',$id)->first();
        return view('crud/crudprofiles/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Profiles::Find($id);

        $grabar->nb_profile=$request->nb_profile;
        $grabar->tx_description=$request->tx_description;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Profiles/lista');
    }

    public function destroy($id)
    {
        Profiles::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Profiles/lista');
    }


 
}

