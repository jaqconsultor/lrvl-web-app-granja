<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Embarquement;
use Session;
use DB;

class EmbarquementCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Embarquement::all();
        return view('crud/crudembarquement/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Embarquement';
        return view('crud/crudembarquement/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Embarquement::create([
        'nb_embarquement'=>$request->nb_embarquement,
        'code_country'=>$request->code_country,
        'code_place'=>$request->code_place
        ]);
        return redirect('/Cruds/Embarquement/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Embarquement::where('id','=',$id)->first();
        return view('crud/crudembarquement/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Embarquement::Find($id);

        $grabar->nb_embarquement=$request->nb_embarquement;
        $grabar->code_country=$request->code_country;
        $grabar->code_place=$request->code_place;

        $grabar->save();

        return redirect('/Cruds/Embarquement/lista');
    }

    public function destroy($id)
    {
        Embarquement::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Embarquement/lista');
    }


 
}

