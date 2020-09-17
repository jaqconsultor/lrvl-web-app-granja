<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Proveedores;
use Session;
use DB;

class ProveedoresCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Proveedores::all();
        return view('crud/crudproveedores/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Proveedores';
        return view('crud/crudproveedores/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Proveedores::create([
        'nb_proveedor'=>$request->nb_proveedor
        ]);
        return redirect('/Cruds/Proveedores/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Proveedores::where('id','=',$id)->first();
        return view('crud/crudproveedores/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Proveedores::Find($id);

        $grabar->nb_proveedor=$request->nb_proveedor;

        $grabar->save();

        return redirect('/Cruds/Proveedores/lista');
    }

    public function destroy($id)
    {
        Proveedores::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Proveedores/lista');
    }


 
}

