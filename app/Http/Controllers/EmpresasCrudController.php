<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Empresas;
use Session;
use DB;

class EmpresasCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Empresas::all();
        return view('crud/crudempresas/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Empresas';
        return view('crud/crudempresas/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Empresas::create([
        'nb_empresa'=>$request->nb_empresa,
        'no_imported'=>$request->no_imported,
        'no_douaniere'=>$request->no_douaniere,
        'membership'=>$request->membership,
        'tps'=>$request->tps,
        'tx_2direccion'=>$request->tx_2direccion,
        'tx_2direccion1'=>$request->tx_2direccion1,
        'tx_2direccion2'=>$request->tx_2direccion2,
        'tx_2direccion3'=>$request->tx_2direccion3,
        'tx_2direccion4'=>$request->tx_2direccion4,
        'tx_2direccion5'=>$request->tx_2direccion5,
        'tx_direccion'=>$request->tx_direccion,
        'tx_direccion1'=>$request->tx_direccion1,
        'tx_direccion2'=>$request->tx_direccion2,
        'tx_direccion3'=>$request->tx_direccion3,
        'tx_direccion4'=>$request->tx_direccion4,
        'tx_direccion5'=>$request->tx_direccion5,
        'tx_logo'=>$request->tx_logo
        ]);
        return redirect('/Cruds/Empresas/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Empresas::where('id','=',$id)->first();
        return view('crud/crudempresas/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Empresas::Find($id);

        $grabar->nb_empresa=$request->nb_empresa;
        $grabar->no_imported=$request->no_imported;
        $grabar->no_douaniere=$request->no_douaniere;
        $grabar->membership=$request->membership;
        $grabar->tps=$request->tps;
        $grabar->tx_2direccion=$request->tx_2direccion;
        $grabar->tx_2direccion1=$request->tx_2direccion1;
        $grabar->tx_2direccion2=$request->tx_2direccion2;
        $grabar->tx_2direccion3=$request->tx_2direccion3;
        $grabar->tx_2direccion4=$request->tx_2direccion4;
        $grabar->tx_2direccion5=$request->tx_2direccion5;
        $grabar->tx_direccion=$request->tx_direccion;
        $grabar->tx_direccion1=$request->tx_direccion1;
        $grabar->tx_direccion2=$request->tx_direccion2;
        $grabar->tx_direccion3=$request->tx_direccion3;
        $grabar->tx_direccion4=$request->tx_direccion4;
        $grabar->tx_direccion5=$request->tx_direccion5;
        $grabar->tx_logo=$request->tx_logo;

        $grabar->save();

        return redirect('/Cruds/Empresas/lista');
    }

    public function destroy($id)
    {
        Empresas::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Empresas/lista');
    }


 
}

