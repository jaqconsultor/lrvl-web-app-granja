<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Licencias;
use Session;
use DB;

class LicenciasCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Licencias::all();
        return view('crud/crudlicencias/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Licencias';
        return view('crud/crudlicencias/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Licencias::create([
        'id_empresa'=>$request->id_empresa,
        'fe_facture'=>$request->fe_facture,
        'nu_facture'=>$request->nu_facture,
        'tx_licencia'=>$request->tx_licencia,
        'tx_code_licencia'=>$request->tx_code_licencia,
        'in_estado'=>$request->in_estado,
        'nu_autorizacion'=>$request->nu_autorizacion,
        'fe_inicio'=>$request->fe_inicio,
        'fe_final'=>$request->fe_final,
        'in_abono'=>$request->in_abono,
        'in_seleccion'=>$request->in_seleccion
        ]);
        return redirect('/Cruds/Licencias/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Licencias::where('id','=',$id)->first();
        return view('crud/crudlicencias/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Licencias::Find($id);

        $grabar->id_empresa=$request->id_empresa;
        $grabar->fe_facture=$request->fe_facture;
        $grabar->nu_facture=$request->nu_facture;
        $grabar->tx_licencia=$request->tx_licencia;
        $grabar->tx_code_licencia=$request->tx_code_licencia;
        $grabar->in_estado=$request->in_estado;
        $grabar->nu_autorizacion=$request->nu_autorizacion;
        $grabar->fe_inicio=$request->fe_inicio;
        $grabar->fe_final=$request->fe_final;
        $grabar->in_abono=$request->in_abono;
        $grabar->in_seleccion=$request->in_seleccion;

        $grabar->save();

        return redirect('/Cruds/Licencias/lista');
    }

    public function destroy($id)
    {
        Licencias::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Licencias/lista');
    }


 
}

