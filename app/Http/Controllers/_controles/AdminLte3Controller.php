<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

//use Auth;
//use DB;
//use Session;
class AdminLte3Controller extends Controller
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

//        return view('template/blank', $datos);

        return view('adminlte/blank', $datos,compact('data','title'));

    }


public function login()
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

        return view('adminlte/registro/login', $datos,compact('data','title'));
    }

    public function olvido()
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

//        return view('template/blank', $datos);


        return view('adminlte/registro/olvido', $datos,compact('data','title'));

    }


public function registro()
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

        return view('adminlte/registro/registro', $datos,compact('data','title'));
    }


public function cerrar()
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

        return view('adminlte/registro/login', $datos,compact('data','title'));
    }


}
