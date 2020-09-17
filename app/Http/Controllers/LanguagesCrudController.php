<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Languages;
use Session;
use DB;

class LanguagesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Languages::all();
        return view('crud/crudlanguages/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Languages';
        return view('crud/crudlanguages/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Languages::create([
        'nb_languages'=>$request->nb_languages,
        'nb_acronym'=>$request->nb_acronym,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Languages/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Languages::where('id','=',$id)->first();
        return view('crud/crudlanguages/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Languages::Find($id);

        $grabar->nb_languages=$request->nb_languages;
        $grabar->nb_acronym=$request->nb_acronym;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Languages/lista');
    }

    public function destroy($id)
    {
        Languages::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Languages/lista');
    }


 
}

