<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Livraison;
use Session;
use DB;

class LivraisonCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Livraison::all();
        return view('crud/crudlivraison/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Livraison';
        return view('crud/crudlivraison/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Livraison::create([
        'nb_livraison'=>$request->nb_livraison,
        'in_tipo'=>$request->in_tipo,
        'color_r'=>$request->color_r,
        'color_g'=>$request->color_g,
        'color_b'=>$request->color_b,
        'mo_taux'=>$request->mo_taux,
        'in_aereolinea'=>$request->in_aereolinea
        ]);
        return redirect('/Cruds/Livraison/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Livraison::where('id','=',$id)->first();
        return view('crud/crudlivraison/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Livraison::Find($id);

        $grabar->nb_livraison=$request->nb_livraison;
        $grabar->in_tipo=$request->in_tipo;
        $grabar->color_r=$request->color_r;
        $grabar->color_g=$request->color_g;
        $grabar->color_b=$request->color_b;
        $grabar->mo_taux=$request->mo_taux;
        $grabar->in_aereolinea=$request->in_aereolinea;

        $grabar->save();

        return redirect('/Cruds/Livraison/lista');
    }

    public function destroy($id)
    {
        Livraison::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Livraison/lista');
    }


 
}

