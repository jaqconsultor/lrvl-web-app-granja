<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Typeofobjs;
use Session;
use DB;

class TypeofobjsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Typeofobjs::all();
        return view('crud/crudtypeofobjs/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Typeofobjs';
        return view('crud/crudtypeofobjs/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Typeofobjs::create([
        'nb_typeofobjs'=>$request->nb_typeofobjs,
        'nb_acronym'=>$request->nb_acronym
        ]);
        return redirect('/Cruds/Typeofobjs/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Typeofobjs::where('id','=',$id)->first();
        return view('crud/crudtypeofobjs/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Typeofobjs::Find($id);

        $grabar->nb_typeofobjs=$request->nb_typeofobjs;
        $grabar->nb_acronym=$request->nb_acronym;

        $grabar->save();

        return redirect('/Cruds/Typeofobjs/lista');
    }

    public function destroy($id)
    {
        Typeofobjs::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Typeofobjs/lista');
    }


 
}

