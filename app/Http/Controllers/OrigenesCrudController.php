<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Origenes;
use Session;
use DB;

class OrigenesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Origenes::all();
        return view('crud/crudorigenes/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Origenes';
        return view('crud/crudorigenes/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Origenes::create([
        'nb_origenes'=>$request->nb_origenes
        ]);
        return redirect('/Cruds/Origenes/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Origenes::where('id','=',$id)->first();
        return view('crud/crudorigenes/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Origenes::Find($id);

        $grabar->nb_origenes=$request->nb_origenes;

        $grabar->save();

        return redirect('/Cruds/Origenes/lista');
    }

    public function destroy($id)
    {
        Origenes::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Origenes/lista');
    }


 
}

