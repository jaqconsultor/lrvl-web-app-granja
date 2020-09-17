<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

//use Auth;
//use DB;
//use Session;
class FrameWork7Controller extends Controller
{

    public function index()
    {

        $menu2 = null;
        $menu1 = null;
        $modulos = null;
		$secciones = null;

        if( Schema::hasTable('projects_modules') ) {
            $datos['title']='Datos del titulo';
            $modulos=DB::table('projects_modules')->get();
        }

        if( Schema::hasTable('projects_sections') ) {
            $datos['title']='Datos del titulo';
            $secciones=DB::table('projects_sections')->get();
        }

        if( Schema::hasTable('projects_descriptions') ) {
            $menu1=DB::table('projects_descriptions')
            ->select('tx_fir_option')
            ->groupBy('tx_fir_option')->get();

            $menu2=DB::table('projects_descriptions')
            ->select('tx_fir_option', 'tx_sec_option')
            ->orderBy('nu_order', 'asc')->get();
        }

        $datos['menu2']=$menu2;
        $datos['menu1']=$menu1;
        $datos['modulos']=$modulos;
		$datos['modulos']=$secciones;

        $title='Lista';
        $datos['title'] = $title;

        $data=null;

        if( Schema::hasTable('projects') ) {
            $data=DB::table('projects')->get();
        }

//        return view('template/blank', $datos);

        return view('framework7/blank', $datos,compact('data','title'));

    }

}
