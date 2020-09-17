<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Profiles;
use Session;
use DB;
use Illuminate\Support\Facades\Schema;

class ProfilesCrudController extends Controller
{

    public function index()
    {

        $menu2 = null;
        $menu1 = null;
        $modulos = null;
        $secciones = null;
        $projects = null;

        $menu2_c = 0;
        $menu1_c = 0;
        $modulos_c = 0;
        $secciones_c = 0;
        $projects_c = 0;

        if( Schema::hasTable('projects') ) {
            $datos['title']='Datos del titulo';
            $projects=DB::table('projects')
            ->where('in_activo','=',1)
            ->get();

            $projects_c=DB::table('projects')
            ->where('in_activo','=',1)
            ->count();

        }
        
        if( Schema::hasTable('projects_modules') ) {
            $datos['title']='Datos del titulo';
            $modulos=DB::table('projects_modules')
            ->join('projects','projects.id','=','projects_modules.id_projects')
            ->where('projects.in_activo','=',1)
            ->get();

            $modulos_c=DB::table('projects_modules')
            ->join('projects','projects.id','=','projects_modules.id_projects')
            ->where('projects.in_activo','=',1)
            ->count();
        }

        if( Schema::hasTable('projects_sections') ) {
            $datos['title']='Datos del titulo';
            $secciones=DB::table('projects_sections')
            ->join('projects','projects.id','=','projects_sections.id_projects')
            ->where('projects.in_activo','=',1)
            ->get();

            $secciones_c=DB::table('projects_sections')
            ->join('projects','projects.id','=','projects_sections.id_projects')
            ->where('projects.in_activo','=',1)
            ->count();

        }
        
        if( Schema::hasTable('projects_descriptions') ) {
            $menu1=DB::table('projects_descriptions')
            ->select('tx_fir_option')
            ->groupBy('tx_fir_option')
            ->join('projects','projects.id','=','projects_descriptions.id_projects')
            ->where('projects.in_activo','=',1)
            ->get();

            $menu1_c=DB::table('projects_descriptions')
            ->select('tx_fir_option')
            ->groupBy('tx_fir_option')
            ->join('projects','projects.id','=','projects_descriptions.id_projects')
            ->where('projects.in_activo','=',1)
            ->count();


            $menu2=DB::table('projects_descriptions')
            ->select('tx_fir_option', 'tx_sec_option')
            ->orderBy('nu_order', 'asc')
            ->join('projects','projects.id','=','projects_descriptions.id_projects')
            ->where('projects.in_activo','=',1)
            ->get();

            $menu2_c=DB::table('projects_descriptions')
            ->select('tx_fir_option', 'tx_sec_option')
            ->orderBy('nu_order', 'asc')
            ->join('projects','projects.id','=','projects_descriptions.id_projects')
            ->where('projects.in_activo','=',1)
            ->count();

        }

        $datos['menu2']=$menu2;
        $datos['menu1']=$menu1;
        $datos['modulos']=$modulos;
        $datos['secciones']=$secciones;
        $datos['projects']=$projects;
        
        $datos['menu2_c']=$menu2_c;
        $datos['menu1_c']=$menu1_c;
        $datos['modulos_c']=$modulos_c;
        $datos['secciones_c']=$secciones_c;
        $datos['projects_c']=$projects_c;
        
        
        $title='Lista';
        $datos['title'] = $title;

        $data=null;
        if( Schema::hasTable('projects') ) {
            $data=DB::table('projects')->get();
        }

        $title='Lista';
        $data=Profiles::all();
        return view('crud/crudprofiles/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Profiles';
        return view('crud/crudprofiles/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Profiles::create([
        'nb_profile'=>$request->nb_profile,
        'tx_description'=>$request->tx_description,
        'in_activerecord'=>$request->in_activerecord
        ]);
        return redirect('/Cruds/Profiles/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Profiles::where('id','=',$id)->first();
        return view('crud/crudprofiles/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Profiles::Find($id);

        $grabar->nb_profile=$request->nb_profile;
        $grabar->tx_description=$request->tx_description;
        $grabar->in_activerecord=$request->in_activerecord;

        $grabar->save();

        return redirect('/Cruds/Profiles/lista');
    }

    public function destroy($id)
    {
        Profiles::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Profiles/lista');
    }


 
}

