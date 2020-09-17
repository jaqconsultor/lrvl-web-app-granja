<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Departments;
use Session;
use DB;

class DepartmentsCrudController extends Controller
{

    public function index()
    {

        $datos['title']='Datos del titulo';
        $modulos=DB::table('projectsmodules')->get();

        $menu1=DB::table('projectsdescriptions')
        ->select('tx_fir_option')
        ->groupBy('tx_fir_option')->get();

        $menu2=DB::table('projectsdescriptions')
        ->select('tx_fir_option', 'tx_sec_option')
        ->orderBy('nu_order', 'asc')->get();

        //dd($menu1);

        $datos['menu2']=$menu2;
        $datos['menu1']=$menu1;
        $datos['modulos']=$modulos;

        $title='Lista';
        $data=Departments::all();
        return view('cruddepartments/listar', $datos,compact('data','title'));
    }

    public function create()
    {

        $datos['title']='Datos del titulo';
        $modulos=DB::table('projectsmodules')->get();

        $menu1=DB::table('projectsdescriptions')
        ->select('tx_fir_option')
        ->groupBy('tx_fir_option')->get();

        $menu2=DB::table('projectsdescriptions')
        ->select('tx_fir_option', 'tx_sec_option')
        ->orderBy('nu_order', 'asc')->get();

        //dd($menu1);

        $datos['menu2']=$menu2;
        $datos['menu1']=$menu1;
        $datos['modulos']=$modulos;

        $title='Crear Departments';
        return view('cruddepartments/crear', $datos)->with('title',$title);
    }

    public function store(Request $request)
    {

        $datos['title']='Datos del titulo';
        $modulos=DB::table('projectsmodules')->get();

        $menu1=DB::table('projectsdescriptions')
        ->select('tx_fir_option')
        ->groupBy('tx_fir_option')->get();

        $menu2=DB::table('projectsdescriptions')
        ->select('tx_fir_option', 'tx_sec_option')
        ->orderBy('nu_order', 'asc')->get();

        //dd($menu1);

        $datos['menu2']=$menu2;
        $datos['menu1']=$menu1;
        $datos['modulos']=$modulos;

        Departments::create([
        'id_management'=>$request->id_management,
        'nb_department'=>$request->nb_department,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Departments/lista', $datos);
    }

    public function show($id)
    {

        $datos['title']='Datos del titulo';
        $modulos=DB::table('projectsmodules')->get();

        $menu1=DB::table('projectsdescriptions')
        ->select('tx_fir_option')
        ->groupBy('tx_fir_option')->get();

        $menu2=DB::table('projectsdescriptions')
        ->select('tx_fir_option', 'tx_sec_option')
        ->orderBy('nu_order', 'asc')->get();

        //dd($menu1);

        $datos['menu2']=$menu2;
        $datos['menu1']=$menu1;
        $datos['modulos']=$modulos;

        $title='Mofificar';
        $data=Departments::where('id','=',$id)->first();
        return view('cruddepartments/modificar', $datos)->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {

        $datos['title']='Datos del titulo';
        $modulos=DB::table('projectsmodules')->get();

        $menu1=DB::table('projectsdescriptions')
        ->select('tx_fir_option')
        ->groupBy('tx_fir_option')->get();

        $menu2=DB::table('projectsdescriptions')
        ->select('tx_fir_option', 'tx_sec_option')
        ->orderBy('nu_order', 'asc')->get();

        //dd($menu1);

        $datos['menu2']=$menu2;
        $datos['menu1']=$menu1;
        $datos['modulos']=$modulos;

    }

    public function update(Request $request,$id)
    {

        $datos['title']='Datos del titulo';
        $modulos=DB::table('projectsmodules')->get();

        $menu1=DB::table('projectsdescriptions')
        ->select('tx_fir_option')
        ->groupBy('tx_fir_option')->get();

        $menu2=DB::table('projectsdescriptions')
        ->select('tx_fir_option', 'tx_sec_option')
        ->orderBy('nu_order', 'asc')->get();

        //dd($menu1);

        $datos['menu2']=$menu2;
        $datos['menu1']=$menu1;
        $datos['modulos']=$modulos;

        $grabar=Departments::Find($id);

        $grabar->id_management=$request->id_management;
        $grabar->nb_department=$request->nb_department;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Departments/lista', $datos);
    }

    public function destroy($id)
    {

        $datos['title']='Datos del titulo';
        $modulos=DB::table('projectsmodules')->get();

        $menu1=DB::table('projectsdescriptions')
        ->select('tx_fir_option')
        ->groupBy('tx_fir_option')->get();

        $menu2=DB::table('projectsdescriptions')
        ->select('tx_fir_option', 'tx_sec_option')
        ->orderBy('nu_order', 'asc')->get();

        //dd($menu1);

        $datos['menu2']=$menu2;
        $datos['menu1']=$menu1;
        $datos['modulos']=$modulos;

        Departments::find($id)->delete(['id','=',$id]);
        return redirect('/Departments/lista', $datos);
    }


 
}

