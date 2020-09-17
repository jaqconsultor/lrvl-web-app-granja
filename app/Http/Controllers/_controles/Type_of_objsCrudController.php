<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Type_of_objs;
use Session;
use DB;

class Type_of_objsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Type_of_objs::all();
        return view('crud/crudtype_of_objs/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Type_of_objs';
        return view('crud/crudtype_of_objs/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Type_of_objs::create([
        'nb_type_of_objs'=>$request->nb_type_of_objs,
        'nb_acronym'=>$request->nb_acronym
        ]);
        return redirect('/Cruds/Type_of_objs/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Type_of_objs::where('id','=',$id)->first();
        return view('crud/crudtype_of_objs/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Type_of_objs::Find($id);

        $grabar->nb_type_of_objs=$request->nb_type_of_objs;
        $grabar->nb_acronym=$request->nb_acronym;

        $grabar->save();

        return redirect('/Cruds/Type_of_objs/lista');
    }

    public function destroy($id)
    {
        Type_of_objs::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Type_of_objs/lista');
    }


 
}

