<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Type_of_fields;
use Session;
use DB;

class Type_of_fieldsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Type_of_fields::all();
        return view('crud/crudtype_of_fields/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Type_of_fields';
        return view('crud/crudtype_of_fields/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Type_of_fields::create([
        'nb_type_of_fields'=>$request->nb_type_of_fields,
        'nb_acronym'=>$request->nb_acronym
        ]);
        return redirect('/Cruds/Type_of_fields/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Type_of_fields::where('id','=',$id)->first();
        return view('crud/crudtype_of_fields/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Type_of_fields::Find($id);

        $grabar->nb_type_of_fields=$request->nb_type_of_fields;
        $grabar->nb_acronym=$request->nb_acronym;

        $grabar->save();

        return redirect('/Cruds/Type_of_fields/lista');
    }

    public function destroy($id)
    {
        Type_of_fields::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Type_of_fields/lista');
    }


 
}

