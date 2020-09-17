<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Trace_xe_action_map;
use Session;
use DB;

class Trace_xe_action_mapCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Trace_xe_action_map::all();
        return view('crud/crudtrace_xe_action_map/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Trace_xe_action_map';
        return view('crud/crudtrace_xe_action_map/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Trace_xe_action_map::create([
        'trace_column_id'=>$request->trace_column_id,
        'package_name'=>$request->package_name,
        'xe_action_name'=>$request->xe_action_name
        ]);
        return redirect('/Cruds/Trace_xe_action_map/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Trace_xe_action_map::where('id','=',$id)->first();
        return view('crud/crudtrace_xe_action_map/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Trace_xe_action_map::Find($id);

        $grabar->trace_column_id=$request->trace_column_id;
        $grabar->package_name=$request->package_name;
        $grabar->xe_action_name=$request->xe_action_name;

        $grabar->save();

        return redirect('/Cruds/Trace_xe_action_map/lista');
    }

    public function destroy($id)
    {
        Trace_xe_action_map::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Trace_xe_action_map/lista');
    }


 
}

