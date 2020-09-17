<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Trace_xe_event_map;
use Session;
use DB;

class Trace_xe_event_mapCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Trace_xe_event_map::all();
        return view('crud/crudtrace_xe_event_map/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Trace_xe_event_map';
        return view('crud/crudtrace_xe_event_map/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Trace_xe_event_map::create([
        'trace_event_id'=>$request->trace_event_id,
        'package_name'=>$request->package_name,
        'xe_event_name'=>$request->xe_event_name
        ]);
        return redirect('/Cruds/Trace_xe_event_map/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Trace_xe_event_map::where('id','=',$id)->first();
        return view('crud/crudtrace_xe_event_map/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Trace_xe_event_map::Find($id);

        $grabar->trace_event_id=$request->trace_event_id;
        $grabar->package_name=$request->package_name;
        $grabar->xe_event_name=$request->xe_event_name;

        $grabar->save();

        return redirect('/Cruds/Trace_xe_event_map/lista');
    }

    public function destroy($id)
    {
        Trace_xe_event_map::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Trace_xe_event_map/lista');
    }


 
}

