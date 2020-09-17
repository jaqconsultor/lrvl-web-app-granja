<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Dictionary_words;
use Session;
use DB;

class Dictionary_wordsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Dictionary_words::all();
        return view('crud/cruddictionary_words/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Dictionary_words';
        return view('crud/cruddictionary_words/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Dictionary_words::create([
        'nb_variable'=>$request->nb_variable,
        'nb_value'=>$request->nb_value,
        'id_languages'=>$request->id_languages
        ]);
        return redirect('/Cruds/Dictionary_words/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Dictionary_words::where('id','=',$id)->first();
        return view('crud/cruddictionary_words/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Dictionary_words::Find($id);

        $grabar->nb_variable=$request->nb_variable;
        $grabar->nb_value=$request->nb_value;
        $grabar->id_languages=$request->id_languages;

        $grabar->save();

        return redirect('/Cruds/Dictionary_words/lista');
    }

    public function destroy($id)
    {
        Dictionary_words::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Dictionary_words/lista');
    }


 
}

