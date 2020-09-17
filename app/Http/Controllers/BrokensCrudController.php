<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Brokens;
use Session;
use DB;

class BrokensCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Brokens::all();
        return view('crud/crudbrokens/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Brokens';
        return view('crud/crudbrokens/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Brokens::create([
        'nb_broken'=>$request->nb_broken
        ]);
        return redirect('/Cruds/Brokens/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Brokens::where('id','=',$id)->first();
        return view('crud/crudbrokens/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Brokens::Find($id);

        $grabar->nb_broken=$request->nb_broken;

        $grabar->save();

        return redirect('/Cruds/Brokens/lista');
    }

    public function destroy($id)
    {
        Brokens::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Brokens/lista');
    }


 
}

