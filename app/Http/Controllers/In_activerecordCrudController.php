<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\In_activerecord;
use Session;
use DB;

class In_activerecordCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=In_activerecord::all();
        return view('crud/crudin_activerecord/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear In_activerecord';
        return view('crud/crudin_activerecord/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        In_activerecord::create([
        'in_activerecord'=>$request->in_activerecord,
        'nb_activerecord'=>$request->nb_activerecord
        ]);
        return redirect('/Cruds/In_activerecord/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=In_activerecord::where('id','=',$id)->first();
        return view('crud/crudin_activerecord/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=In_activerecord::Find($id);

        $grabar->in_activerecord=$request->in_activerecord;
        $grabar->nb_activerecord=$request->nb_activerecord;

        $grabar->save();

        return redirect('/Cruds/In_activerecord/lista');
    }

    public function destroy($id)
    {
        In_activerecord::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/In_activerecord/lista');
    }


 
}

