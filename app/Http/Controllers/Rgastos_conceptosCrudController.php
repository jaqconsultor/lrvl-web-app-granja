<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Rgastos_conceptos;
use Session;
use DB;

class Rgastos_conceptosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Rgastos_conceptos::all();
        return view('crud/crudrgastos_conceptos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Rgastos_conceptos';
        return view('crud/crudrgastos_conceptos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Rgastos_conceptos::create([
        'nb_conceptos'=>$request->nb_conceptos,
        'in_suma'=>$request->in_suma
        ]);
        return redirect('/Cruds/Rgastos_conceptos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Rgastos_conceptos::where('id','=',$id)->first();
        return view('crud/crudrgastos_conceptos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Rgastos_conceptos::Find($id);

        $grabar->nb_conceptos=$request->nb_conceptos;
        $grabar->in_suma=$request->in_suma;

        $grabar->save();

        return redirect('/Cruds/Rgastos_conceptos/lista');
    }

    public function destroy($id)
    {
        Rgastos_conceptos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Rgastos_conceptos/lista');
    }


 
}

