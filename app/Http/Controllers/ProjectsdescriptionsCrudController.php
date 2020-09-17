<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Projectsdescriptions;
use Session;
use DB;

class ProjectsdescriptionsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Projectsdescriptions::all();
        return view('crud/crudprojectsdescriptions/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Projectsdescriptions';
        return view('crud/crudprojectsdescriptions/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Projectsdescriptions::create([
        'id_module'=>$request->id_module,
        'id_typeofobjs'=>$request->id_typeofobjs,
        'nu_order'=>$request->nu_order,
        'id_destination'=>$request->id_destination,
        'tx_fir_option'=>$request->tx_fir_option,
        'tx_sec_option'=>$request->tx_sec_option,
        'tx_thi_option'=>$request->tx_thi_option,
        'tx_description'=>$request->tx_description,
        'tx_icon'=>$request->tx_icon,
        'tx_destination'=>$request->tx_destination,
        'nu_order2'=>$request->nu_order2,
        'nu_order3'=>$request->nu_order3
        ]);
        return redirect('/Cruds/Projectsdescriptions/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Projectsdescriptions::where('id','=',$id)->first();
        return view('crud/crudprojectsdescriptions/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Projectsdescriptions::Find($id);

        $grabar->id_module=$request->id_module;
        $grabar->id_typeofobjs=$request->id_typeofobjs;
        $grabar->nu_order=$request->nu_order;
        $grabar->id_destination=$request->id_destination;
        $grabar->tx_fir_option=$request->tx_fir_option;
        $grabar->tx_sec_option=$request->tx_sec_option;
        $grabar->tx_thi_option=$request->tx_thi_option;
        $grabar->tx_description=$request->tx_description;
        $grabar->tx_icon=$request->tx_icon;
        $grabar->tx_destination=$request->tx_destination;
        $grabar->nu_order2=$request->nu_order2;
        $grabar->nu_order3=$request->nu_order3;

        $grabar->save();

        return redirect('/Cruds/Projectsdescriptions/lista');
    }

    public function destroy($id)
    {
        Projectsdescriptions::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Projectsdescriptions/lista');
    }


 
}

