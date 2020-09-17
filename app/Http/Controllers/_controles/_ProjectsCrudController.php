<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Projects;
use Session;
use DB;

class ProjectsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Projects::all();

        $datos['title']='Datos del titulo';
        $modulos=DB::table('projects_modules')->get();

        $menu1=DB::table('projects_descriptions')
        ->select('tx_fir_option')
        ->groupBy('tx_fir_option')->get();

        $menu2=DB::table('projects_descriptions')
        ->select('tx_fir_option', 'tx_sec_option')
        ->orderBy('nu_order', 'asc')->get();

        //dd($menu1);

        $datos['menu2']=$menu2;
        $datos['menu1']=$menu1;
        $datos['modulos']=$modulos;

        return view('crud/crudprojects/listar', $datos,compact('data','title'));
    }

    public function create()
    {
        $title='Crear Projects';
        $title='Lista';
        $data=Projects::all();

        $datos['title']='Datos del titulo';
        $modulos=DB::table('projects_modules')->get();

        $menu1=DB::table('projects_descriptions')
        ->select('tx_fir_option')
        ->groupBy('tx_fir_option')->get();

        $menu2=DB::table('projects_descriptions')
        ->select('tx_fir_option', 'tx_sec_option')
        ->orderBy('nu_order', 'asc')->get();

        //dd($menu1);

        $datos['menu2']=$menu2;
        $datos['menu1']=$menu1;
        $datos['modulos']=$modulos;

        return view('crud/crudprojects/crear', $datos)->with('title',$title);
    }

    public function store(Request $request)
    {
        Projects::create([
        'nb_project'=>$request->nb_project,
        'nb_description'=>$request->nb_description,
        'nb_acronym'=>$request->nb_acronym
        ]);
        return redirect('/Cruds/Projects/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Projects::where('id','=',$id)->first();

        $datos['title']='Datos del titulo';
        $modulos=DB::table('projects_modules')->get();

        $menu1=DB::table('projects_descriptions')
        ->select('tx_fir_option')
        ->groupBy('tx_fir_option')->get();

        $menu2=DB::table('projects_descriptions')
        ->select('tx_fir_option', 'tx_sec_option')
        ->orderBy('nu_order', 'asc')->get();

        //dd($menu1);

        $datos['menu2']=$menu2;
        $datos['menu1']=$menu1;
        $datos['modulos']=$modulos;

        return view('crud/crudprojects/modificar', $datos )->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Projects::Find($id);

        $grabar->nb_project=$request->nb_project;
        $grabar->nb_description=$request->nb_description;
        $grabar->nb_acronym=$request->nb_acronym;

        $grabar->save();

        return redirect('/Cruds/Projects/lista');
    }

    public function destroy($id)
    {
        Projects::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Projects/lista');
    }


 
}

