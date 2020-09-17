<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
//use App\Libro;
use DB;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['title']="Conuslta";

        $libros=null;
        if( Schema::hasTable('libros') ) {
            $libros=DB::table('libros')->orderBy('id', 'desc')->get();
        }

        return view('Libro.index', $datos,compact('libros')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datos['title']="Crear";
        return view('Libro.create',$datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
        $this->validate($request,[ 'nombre'=>'required', 'resumen'=>'required', 'npagina'=>'required', 'edicion'=>'required', 'autor'=>'required', 'npagina'=>'required', 'precio'=>'required']);

        DB::table('libros')->insert([
            'nombre' => $request->nombre ,
            'npagina' => $request->npagina ,
            'edicion' => $request->edicion ,
            'resumen' => $request->resumen ,
            'precio' => $request->precio ,
            'autor' => $request->autor
        ]);

//        Libro::create($request->all());
        return redirect()->route('libro.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //$libro1=libro::find($id);
        $libros=DB::table('libros')->where('id', '=', $id)->get();
        $datos['title']="Editar";
        $datos['idcode']=$id;
        return  view('libro.show',$datos,compact('libros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //
        //$libro1=libro::find($id);
        $libros=DB::table('libros')->where('id', '=', $id)->get();
        $datos['title']="Editar";
        $datos['idcode']=$id;
        return view('libro.edit',$datos,compact('libros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        //
        $this->validate($request,[ 'nombre'=>'required', 'resumen'=>'required', 'npagina'=>'required', 'edicion'=>'required', 'autor'=>'required', 'npagina'=>'required', 'precio'=>'required']);

        /*DB::table('users')
        ->updateOrInsert(
            ['email' => 'john@example.com', 'name' => 'John'],
            ['votes' => '2']
        );*/

        DB::table('libros')->where('id', $id)->update([
            'nombre' => $request->nombre ,
            'npagina' => $request->npagina ,
            'edicion' => $request->edicion ,
            'resumen' => $request->resumen ,
            'precio' => $request->precio ,
            'autor' => $request->autor
        ]);

//        libro::find($id)->update($request->all());
        return redirect()->route('libro.index')->with('success','Registro actualizado satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

         DB::table('libros')->where('id', $id)->delete();

         //Libro::find($id)->delete();
        return redirect()->route('libro.index')->with('success','Registro eliminado satisfactoriamente');
    }


    /**
     * Ejemplo de método REST 
     *
     * @return \Illuminate\Http\Response
     */

    public function getLibros(){
        //$libros=Libro::all();
        $libros=null;
        if( Schema::hasTable('libros') ) {
            $libros=DB::table('libros')->orderBy('id', 'desc')->get();
        }
        return response()->json($libros);
    }
}
