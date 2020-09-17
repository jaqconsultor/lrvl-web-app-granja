<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Gestion_mx;
use Session;
use DB;

class Gestion_mxCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Gestion_mx::all();
        return view('crud/crudgestion_mx/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Gestion_mx';
        return view('crud/crudgestion_mx/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Gestion_mx::create([
        'nu_fact'=>$request->nu_fact,
        'fe_factura'=>$request->fe_factura,
        'nu_cant'=>$request->nu_cant,
        'id_producto_caja'=>$request->id_producto_caja,
        'id_proveedor'=>$request->id_proveedor,
        'id_productor'=>$request->id_productor,
        'mo_precio'=>$request->mo_precio,
        'mo_sub_total'=>$request->mo_sub_total
        ]);
        return redirect('/Cruds/Gestion_mx/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Gestion_mx::where('id','=',$id)->first();
        return view('crud/crudgestion_mx/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Gestion_mx::Find($id);

        $grabar->nu_fact=$request->nu_fact;
        $grabar->fe_factura=$request->fe_factura;
        $grabar->nu_cant=$request->nu_cant;
        $grabar->id_producto_caja=$request->id_producto_caja;
        $grabar->id_proveedor=$request->id_proveedor;
        $grabar->id_productor=$request->id_productor;
        $grabar->mo_precio=$request->mo_precio;
        $grabar->mo_sub_total=$request->mo_sub_total;

        $grabar->save();

        return redirect('/Cruds/Gestion_mx/lista');
    }

    public function destroy($id)
    {
        Gestion_mx::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Gestion_mx/lista');
    }


 
}

