<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Chauffeur;
use Session;
use DB;

class ChauffeurCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Chauffeur::all();
        return view('crud/crudchauffeur/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Chauffeur';
        return view('crud/crudchauffeur/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Chauffeur::create([
        'nb_chauffeur'=>$request->nb_chauffeur,
        'nb_direccion'=>$request->nb_direccion,
        'nb_informacion'=>$request->nb_informacion,
        'nu_tel1'=>$request->nu_tel1,
        'nu_tel2'=>$request->nu_tel2,
        'tx_email'=>$request->tx_email,
        'in_tipo'=>$request->in_tipo
        ]);
        return redirect('/Cruds/Chauffeur/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Chauffeur::where('id','=',$id)->first();
        return view('crud/crudchauffeur/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Chauffeur::Find($id);

        $grabar->nb_chauffeur=$request->nb_chauffeur;
        $grabar->nb_direccion=$request->nb_direccion;
        $grabar->nb_informacion=$request->nb_informacion;
        $grabar->nu_tel1=$request->nu_tel1;
        $grabar->nu_tel2=$request->nu_tel2;
        $grabar->tx_email=$request->tx_email;
        $grabar->in_tipo=$request->in_tipo;

        $grabar->save();

        return redirect('/Cruds/Chauffeur/lista');
    }

    public function destroy($id)
    {
        Chauffeur::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Chauffeur/lista');
    }


 
}

