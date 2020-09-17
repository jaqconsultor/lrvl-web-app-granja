<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Type_of_destination;
use Session;
use DB;

class Type_of_destinationCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Type_of_destination::all();
        return view('crud/crudtype_of_destination/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Type_of_destination';
        return view('crud/crudtype_of_destination/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Type_of_destination::create([
        'nb_type_of_destination'=>$request->nb_type_of_destination,
        'nb_acronym'=>$request->nb_acronym
        ]);
        return redirect('/Cruds/Type_of_destination/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Type_of_destination::where('id','=',$id)->first();
        return view('crud/crudtype_of_destination/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Type_of_destination::Find($id);

        $grabar->nb_type_of_destination=$request->nb_type_of_destination;
        $grabar->nb_acronym=$request->nb_acronym;

        $grabar->save();

        return redirect('/Cruds/Type_of_destination/lista');
    }

    public function destroy($id)
    {
        Type_of_destination::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Type_of_destination/lista');
    }


 
}

