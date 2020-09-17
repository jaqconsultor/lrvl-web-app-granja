<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Projectsmodules;
use Session;
use DB;

class ProjectsmodulesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Projectsmodules::all();
        return view('crud/crudprojectsmodules/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Projectsmodules';
        return view('crud/crudprojectsmodules/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Projectsmodules::create([
        'nu_order'=>$request->nu_order,
        'id_projects'=>$request->id_projects,
        'nb_module'=>$request->nb_module,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Projectsmodules/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Projectsmodules::where('id','=',$id)->first();
        return view('crud/crudprojectsmodules/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Projectsmodules::Find($id);

        $grabar->nu_order=$request->nu_order;
        $grabar->id_projects=$request->id_projects;
        $grabar->nb_module=$request->nb_module;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Projectsmodules/lista');
    }

    public function destroy($id)
    {
        Projectsmodules::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Projectsmodules/lista');
    }


 
}

