<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


GET: index, create, show, edit.
POST: store.
PUT: update.
DELETE: destroy.
PATCH: update.
Los controladores nos ayudan a agrupar estas peticiones en una clase que se liga a las
rutas, en el archivo app/Http/routes.php , para esto usamos un tipo de ruta llamana
resource:
Route::resource('pasteles', 'PastelesController');
Esta ruta nos creara un grupo de rutas de recursos con las peticiones que estas
mencionadas arriba: index, create, show, edit, store, update, destroy

*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/


//Route::get('/', ['uses' => 'FrameWork7Controller@index'] );

Route::get('/', ['uses' => 'PaginaController@index'] );


Route::get('/i', ['uses' => 'AdminLte3Controller@login'] );
Route::get('/login', ['uses' => 'AdminLte3Controller@login'] );
Route::get('/registro', ['uses' => 'AdminLte3Controller@registro'] );
Route::get('/olvido', ['uses' => 'AdminLte3Controller@olvido'] );
Route::get('/cerrar', ['uses' => 'AdminLte3Controller@cerrar'] );

Route::post('/', ['uses' => 'AdminLte3Controller@login'] );
Route::post('/login', ['uses' => 'AdminLte3Controller@login'] );
Route::post('/registro', ['uses' => 'AdminLte3Controller@registro'] );
Route::post('/olvido', ['uses' => 'AdminLte3Controller@olvido'] );
Route::post('/index', ['uses' => 'AdminLte3Controller@index'] );



Route::get('/login1', ['uses' => 'PaginaController@login'] );
Route::get('/registro1', ['uses' => 'PaginaController@registro'] );
Route::get('/olvido1', ['uses' => 'PaginaController@olvido'] );


  // API WebServices
  Route::get('api/v1/libros','LibroController@getLibros');

// Database Ruta
  Route::get('/DB/Create','DBController@create');
  Route::get('/DB/RollBack','DBController@rollback');

  Route::get('/Cruds/Aereolineas/lista','AereolineasCrudController@index');
  Route::get('/Cruds/Aereolineas/CrearNuevo','AereolineasCrudController@create');
  Route::post('/Cruds/Aereolineas/GuardarNuevo','AereolineasCrudController@store');
  Route::get('/Cruds/Aereolineas/Modificar/{id}','AereolineasCrudController@show');
  Route::post('/Cruds/Aereolineas/GuardarEdicion/{id}','AereolineasCrudController@update');
  Route::get('/Cruds/Aereolineas/Eliminar/{id}','AereolineasCrudController@destroy');


  Route::get('/Cruds/Brokens/lista','BrokensCrudController@index');
  Route::get('/Cruds/Brokens/CrearNuevo','BrokensCrudController@create');
  Route::post('/Cruds/Brokens/GuardarNuevo','BrokensCrudController@store');
  Route::get('/Cruds/Brokens/Modificar/{id}','BrokensCrudController@show');
  Route::post('/Cruds/Brokens/GuardarEdicion/{id}','BrokensCrudController@update');
  Route::get('/Cruds/Brokens/Eliminar/{id}','BrokensCrudController@destroy');


  Route::get('/Cruds/Camion/lista','CamionCrudController@index');
  Route::get('/Cruds/Camion/CrearNuevo','CamionCrudController@create');
  Route::post('/Cruds/Camion/GuardarNuevo','CamionCrudController@store');
  Route::get('/Cruds/Camion/Modificar/{id}','CamionCrudController@show');
  Route::post('/Cruds/Camion/GuardarEdicion/{id}','CamionCrudController@update');
  Route::get('/Cruds/Camion/Eliminar/{id}','CamionCrudController@destroy');


  Route::get('/Cruds/Chauffeur/lista','ChauffeurCrudController@index');
  Route::get('/Cruds/Chauffeur/CrearNuevo','ChauffeurCrudController@create');
  Route::post('/Cruds/Chauffeur/GuardarNuevo','ChauffeurCrudController@store');
  Route::get('/Cruds/Chauffeur/Modificar/{id}','ChauffeurCrudController@show');
  Route::post('/Cruds/Chauffeur/GuardarEdicion/{id}','ChauffeurCrudController@update');
  Route::get('/Cruds/Chauffeur/Eliminar/{id}','ChauffeurCrudController@destroy');


  Route::get('/Cruds/Clients/lista','ClientsCrudController@index');
  Route::get('/Cruds/Clients/CrearNuevo','ClientsCrudController@create');
  Route::post('/Cruds/Clients/GuardarNuevo','ClientsCrudController@store');
  Route::get('/Cruds/Clients/Modificar/{id}','ClientsCrudController@show');
  Route::post('/Cruds/Clients/GuardarEdicion/{id}','ClientsCrudController@update');
  Route::get('/Cruds/Clients/Eliminar/{id}','ClientsCrudController@destroy');


  Route::get('/Cruds/Datos/lista','DatosCrudController@index');
  Route::get('/Cruds/Datos/CrearNuevo','DatosCrudController@create');
  Route::post('/Cruds/Datos/GuardarNuevo','DatosCrudController@store');
  Route::get('/Cruds/Datos/Modificar/{id}','DatosCrudController@show');
  Route::post('/Cruds/Datos/GuardarEdicion/{id}','DatosCrudController@update');
  Route::get('/Cruds/Datos/Eliminar/{id}','DatosCrudController@destroy');


  Route::get('/Cruds/Datos_b3/lista','Datos_b3CrudController@index');
  Route::get('/Cruds/Datos_b3/CrearNuevo','Datos_b3CrudController@create');
  Route::post('/Cruds/Datos_b3/GuardarNuevo','Datos_b3CrudController@store');
  Route::get('/Cruds/Datos_b3/Modificar/{id}','Datos_b3CrudController@show');
  Route::post('/Cruds/Datos_b3/GuardarEdicion/{id}','Datos_b3CrudController@update');
  Route::get('/Cruds/Datos_b3/Eliminar/{id}','Datos_b3CrudController@destroy');


  Route::get('/Cruds/Datos_b3_detalle/lista','Datos_b3_detalleCrudController@index');
  Route::get('/Cruds/Datos_b3_detalle/CrearNuevo','Datos_b3_detalleCrudController@create');
  Route::post('/Cruds/Datos_b3_detalle/GuardarNuevo','Datos_b3_detalleCrudController@store');
  Route::get('/Cruds/Datos_b3_detalle/Modificar/{id}','Datos_b3_detalleCrudController@show');
  Route::post('/Cruds/Datos_b3_detalle/GuardarEdicion/{id}','Datos_b3_detalleCrudController@update');
  Route::get('/Cruds/Datos_b3_detalle/Eliminar/{id}','Datos_b3_detalleCrudController@destroy');


  Route::get('/Cruds/Datos_cos/lista','Datos_cosCrudController@index');
  Route::get('/Cruds/Datos_cos/CrearNuevo','Datos_cosCrudController@create');
  Route::post('/Cruds/Datos_cos/GuardarNuevo','Datos_cosCrudController@store');
  Route::get('/Cruds/Datos_cos/Modificar/{id}','Datos_cosCrudController@show');
  Route::post('/Cruds/Datos_cos/GuardarEdicion/{id}','Datos_cosCrudController@update');
  Route::get('/Cruds/Datos_cos/Eliminar/{id}','Datos_cosCrudController@destroy');


  Route::get('/Cruds/Datos_notas/lista','Datos_notasCrudController@index');
  Route::get('/Cruds/Datos_notas/CrearNuevo','Datos_notasCrudController@create');
  Route::post('/Cruds/Datos_notas/GuardarNuevo','Datos_notasCrudController@store');
  Route::get('/Cruds/Datos_notas/Modificar/{id}','Datos_notasCrudController@show');
  Route::post('/Cruds/Datos_notas/GuardarEdicion/{id}','Datos_notasCrudController@update');
  Route::get('/Cruds/Datos_notas/Eliminar/{id}','Datos_notasCrudController@destroy');


  Route::get('/Cruds/Datos_rgastos/lista','Datos_rgastosCrudController@index');
  Route::get('/Cruds/Datos_rgastos/CrearNuevo','Datos_rgastosCrudController@create');
  Route::post('/Cruds/Datos_rgastos/GuardarNuevo','Datos_rgastosCrudController@store');
  Route::get('/Cruds/Datos_rgastos/Modificar/{id}','Datos_rgastosCrudController@show');
  Route::post('/Cruds/Datos_rgastos/GuardarEdicion/{id}','Datos_rgastosCrudController@update');
  Route::get('/Cruds/Datos_rgastos/Eliminar/{id}','Datos_rgastosCrudController@destroy');


  Route::get('/Cruds/Datos_seguimiento/lista','Datos_seguimientoCrudController@index');
  Route::get('/Cruds/Datos_seguimiento/CrearNuevo','Datos_seguimientoCrudController@create');
  Route::post('/Cruds/Datos_seguimiento/GuardarNuevo','Datos_seguimientoCrudController@store');
  Route::get('/Cruds/Datos_seguimiento/Modificar/{id}','Datos_seguimientoCrudController@show');
  Route::post('/Cruds/Datos_seguimiento/GuardarEdicion/{id}','Datos_seguimientoCrudController@update');
  Route::get('/Cruds/Datos_seguimiento/Eliminar/{id}','Datos_seguimientoCrudController@destroy');


  Route::get('/Cruds/Departments/lista','DepartmentsCrudController@index');
  Route::get('/Cruds/Departments/CrearNuevo','DepartmentsCrudController@create');
  Route::post('/Cruds/Departments/GuardarNuevo','DepartmentsCrudController@store');
  Route::get('/Cruds/Departments/Modificar/{id}','DepartmentsCrudController@show');
  Route::post('/Cruds/Departments/GuardarEdicion/{id}','DepartmentsCrudController@update');
  Route::get('/Cruds/Departments/Eliminar/{id}','DepartmentsCrudController@destroy');


  Route::get('/Cruds/Destino/lista','DestinoCrudController@index');
  Route::get('/Cruds/Destino/CrearNuevo','DestinoCrudController@create');
  Route::post('/Cruds/Destino/GuardarNuevo','DestinoCrudController@store');
  Route::get('/Cruds/Destino/Modificar/{id}','DestinoCrudController@show');
  Route::post('/Cruds/Destino/GuardarEdicion/{id}','DestinoCrudController@update');
  Route::get('/Cruds/Destino/Eliminar/{id}','DestinoCrudController@destroy');


  Route::get('/Cruds/Dictionary_words/lista','Dictionary_wordsCrudController@index');
  Route::get('/Cruds/Dictionary_words/CrearNuevo','Dictionary_wordsCrudController@create');
  Route::post('/Cruds/Dictionary_words/GuardarNuevo','Dictionary_wordsCrudController@store');
  Route::get('/Cruds/Dictionary_words/Modificar/{id}','Dictionary_wordsCrudController@show');
  Route::post('/Cruds/Dictionary_words/GuardarEdicion/{id}','Dictionary_wordsCrudController@update');
  Route::get('/Cruds/Dictionary_words/Eliminar/{id}','Dictionary_wordsCrudController@destroy');


  Route::get('/Cruds/Embarquement/lista','EmbarquementCrudController@index');
  Route::get('/Cruds/Embarquement/CrearNuevo','EmbarquementCrudController@create');
  Route::post('/Cruds/Embarquement/GuardarNuevo','EmbarquementCrudController@store');
  Route::get('/Cruds/Embarquement/Modificar/{id}','EmbarquementCrudController@show');
  Route::post('/Cruds/Embarquement/GuardarEdicion/{id}','EmbarquementCrudController@update');
  Route::get('/Cruds/Embarquement/Eliminar/{id}','EmbarquementCrudController@destroy');


  Route::get('/Cruds/Empresas/lista','EmpresasCrudController@index');
  Route::get('/Cruds/Empresas/CrearNuevo','EmpresasCrudController@create');
  Route::post('/Cruds/Empresas/GuardarNuevo','EmpresasCrudController@store');
  Route::get('/Cruds/Empresas/Modificar/{id}','EmpresasCrudController@show');
  Route::post('/Cruds/Empresas/GuardarEdicion/{id}','EmpresasCrudController@update');
  Route::get('/Cruds/Empresas/Eliminar/{id}','EmpresasCrudController@destroy');


  Route::get('/Cruds/Failed_jobs/lista','Failed_jobsCrudController@index');
  Route::get('/Cruds/Failed_jobs/CrearNuevo','Failed_jobsCrudController@create');
  Route::post('/Cruds/Failed_jobs/GuardarNuevo','Failed_jobsCrudController@store');
  Route::get('/Cruds/Failed_jobs/Modificar/{id}','Failed_jobsCrudController@show');
  Route::post('/Cruds/Failed_jobs/GuardarEdicion/{id}','Failed_jobsCrudController@update');
  Route::get('/Cruds/Failed_jobs/Eliminar/{id}','Failed_jobsCrudController@destroy');


  Route::get('/Cruds/Gestion_cajas/lista','Gestion_cajasCrudController@index');
  Route::get('/Cruds/Gestion_cajas/CrearNuevo','Gestion_cajasCrudController@create');
  Route::post('/Cruds/Gestion_cajas/GuardarNuevo','Gestion_cajasCrudController@store');
  Route::get('/Cruds/Gestion_cajas/Modificar/{id}','Gestion_cajasCrudController@show');
  Route::post('/Cruds/Gestion_cajas/GuardarEdicion/{id}','Gestion_cajasCrudController@update');
  Route::get('/Cruds/Gestion_cajas/Eliminar/{id}','Gestion_cajasCrudController@destroy');


  Route::get('/Cruds/Gestion_mx/lista','Gestion_mxCrudController@index');
  Route::get('/Cruds/Gestion_mx/CrearNuevo','Gestion_mxCrudController@create');
  Route::post('/Cruds/Gestion_mx/GuardarNuevo','Gestion_mxCrudController@store');
  Route::get('/Cruds/Gestion_mx/Modificar/{id}','Gestion_mxCrudController@show');
  Route::post('/Cruds/Gestion_mx/GuardarEdicion/{id}','Gestion_mxCrudController@update');
  Route::get('/Cruds/Gestion_mx/Eliminar/{id}','Gestion_mxCrudController@destroy');


  Route::get('/Cruds/Grupo_paises/lista','Grupo_paisesCrudController@index');
  Route::get('/Cruds/Grupo_paises/CrearNuevo','Grupo_paisesCrudController@create');
  Route::post('/Cruds/Grupo_paises/GuardarNuevo','Grupo_paisesCrudController@store');
  Route::get('/Cruds/Grupo_paises/Modificar/{id}','Grupo_paisesCrudController@show');
  Route::post('/Cruds/Grupo_paises/GuardarEdicion/{id}','Grupo_paisesCrudController@update');
  Route::get('/Cruds/Grupo_paises/Eliminar/{id}','Grupo_paisesCrudController@destroy');


  Route::get('/Cruds/In_activerecord/lista','In_activerecordCrudController@index');
  Route::get('/Cruds/In_activerecord/CrearNuevo','In_activerecordCrudController@create');
  Route::post('/Cruds/In_activerecord/GuardarNuevo','In_activerecordCrudController@store');
  Route::get('/Cruds/In_activerecord/Modificar/{id}','In_activerecordCrudController@show');
  Route::post('/Cruds/In_activerecord/GuardarEdicion/{id}','In_activerecordCrudController@update');
  Route::get('/Cruds/In_activerecord/Eliminar/{id}','In_activerecordCrudController@destroy');


  Route::get('/Cruds/Inv_archivos/lista','Inv_archivosCrudController@index');
  Route::get('/Cruds/Inv_archivos/CrearNuevo','Inv_archivosCrudController@create');
  Route::post('/Cruds/Inv_archivos/GuardarNuevo','Inv_archivosCrudController@store');
  Route::get('/Cruds/Inv_archivos/Modificar/{id}','Inv_archivosCrudController@show');
  Route::post('/Cruds/Inv_archivos/GuardarEdicion/{id}','Inv_archivosCrudController@update');
  Route::get('/Cruds/Inv_archivos/Eliminar/{id}','Inv_archivosCrudController@destroy');


  Route::get('/Cruds/Inv_archivos_detalle/lista','Inv_archivos_detalleCrudController@index');
  Route::get('/Cruds/Inv_archivos_detalle/CrearNuevo','Inv_archivos_detalleCrudController@create');
  Route::post('/Cruds/Inv_archivos_detalle/GuardarNuevo','Inv_archivos_detalleCrudController@store');
  Route::get('/Cruds/Inv_archivos_detalle/Modificar/{id}','Inv_archivos_detalleCrudController@show');
  Route::post('/Cruds/Inv_archivos_detalle/GuardarEdicion/{id}','Inv_archivos_detalleCrudController@update');
  Route::get('/Cruds/Inv_archivos_detalle/Eliminar/{id}','Inv_archivos_detalleCrudController@destroy');


  Route::get('/Cruds/Inv_ficha/lista','Inv_fichaCrudController@index');
  Route::get('/Cruds/Inv_ficha/CrearNuevo','Inv_fichaCrudController@create');
  Route::post('/Cruds/Inv_ficha/GuardarNuevo','Inv_fichaCrudController@store');
  Route::get('/Cruds/Inv_ficha/Modificar/{id}','Inv_fichaCrudController@show');
  Route::post('/Cruds/Inv_ficha/GuardarEdicion/{id}','Inv_fichaCrudController@update');
  Route::get('/Cruds/Inv_ficha/Eliminar/{id}','Inv_fichaCrudController@destroy');


  Route::get('/Cruds/Languages/lista','LanguagesCrudController@index');
  Route::get('/Cruds/Languages/CrearNuevo','LanguagesCrudController@create');
  Route::post('/Cruds/Languages/GuardarNuevo','LanguagesCrudController@store');
  Route::get('/Cruds/Languages/Modificar/{id}','LanguagesCrudController@show');
  Route::post('/Cruds/Languages/GuardarEdicion/{id}','LanguagesCrudController@update');
  Route::get('/Cruds/Languages/Eliminar/{id}','LanguagesCrudController@destroy');


  Route::get('/Cruds/Licencias/lista','LicenciasCrudController@index');
  Route::get('/Cruds/Licencias/CrearNuevo','LicenciasCrudController@create');
  Route::post('/Cruds/Licencias/GuardarNuevo','LicenciasCrudController@store');
  Route::get('/Cruds/Licencias/Modificar/{id}','LicenciasCrudController@show');
  Route::post('/Cruds/Licencias/GuardarEdicion/{id}','LicenciasCrudController@update');
  Route::get('/Cruds/Licencias/Eliminar/{id}','LicenciasCrudController@destroy');


  Route::get('/Cruds/Livraison/lista','LivraisonCrudController@index');
  Route::get('/Cruds/Livraison/CrearNuevo','LivraisonCrudController@create');
  Route::post('/Cruds/Livraison/GuardarNuevo','LivraisonCrudController@store');
  Route::get('/Cruds/Livraison/Modificar/{id}','LivraisonCrudController@show');
  Route::post('/Cruds/Livraison/GuardarEdicion/{id}','LivraisonCrudController@update');
  Route::get('/Cruds/Livraison/Eliminar/{id}','LivraisonCrudController@destroy');


  Route::get('/Cruds/Mae_detalle/lista','Mae_detalleCrudController@index');
  Route::get('/Cruds/Mae_detalle/CrearNuevo','Mae_detalleCrudController@create');
  Route::post('/Cruds/Mae_detalle/GuardarNuevo','Mae_detalleCrudController@store');
  Route::get('/Cruds/Mae_detalle/Modificar/{id}','Mae_detalleCrudController@show');
  Route::post('/Cruds/Mae_detalle/GuardarEdicion/{id}','Mae_detalleCrudController@update');
  Route::get('/Cruds/Mae_detalle/Eliminar/{id}','Mae_detalleCrudController@destroy');


  Route::get('/Cruds/Mae_estados/lista','Mae_estadosCrudController@index');
  Route::get('/Cruds/Mae_estados/CrearNuevo','Mae_estadosCrudController@create');
  Route::post('/Cruds/Mae_estados/GuardarNuevo','Mae_estadosCrudController@store');
  Route::get('/Cruds/Mae_estados/Modificar/{id}','Mae_estadosCrudController@show');
  Route::post('/Cruds/Mae_estados/GuardarEdicion/{id}','Mae_estadosCrudController@update');
  Route::get('/Cruds/Mae_estados/Eliminar/{id}','Mae_estadosCrudController@destroy');


  Route::get('/Cruds/Mae_maestro/lista','Mae_maestroCrudController@index');
  Route::get('/Cruds/Mae_maestro/CrearNuevo','Mae_maestroCrudController@create');
  Route::post('/Cruds/Mae_maestro/GuardarNuevo','Mae_maestroCrudController@store');
  Route::get('/Cruds/Mae_maestro/Modificar/{id}','Mae_maestroCrudController@show');
  Route::post('/Cruds/Mae_maestro/GuardarEdicion/{id}','Mae_maestroCrudController@update');
  Route::get('/Cruds/Mae_maestro/Eliminar/{id}','Mae_maestroCrudController@destroy');


  Route::get('/Cruds/Managements/lista','ManagementsCrudController@index');
  Route::get('/Cruds/Managements/CrearNuevo','ManagementsCrudController@create');
  Route::post('/Cruds/Managements/GuardarNuevo','ManagementsCrudController@store');
  Route::get('/Cruds/Managements/Modificar/{id}','ManagementsCrudController@show');
  Route::post('/Cruds/Managements/GuardarEdicion/{id}','ManagementsCrudController@update');
  Route::get('/Cruds/Managements/Eliminar/{id}','ManagementsCrudController@destroy');


  Route::get('/Cruds/Migrations/lista','MigrationsCrudController@index');
  Route::get('/Cruds/Migrations/CrearNuevo','MigrationsCrudController@create');
  Route::post('/Cruds/Migrations/GuardarNuevo','MigrationsCrudController@store');
  Route::get('/Cruds/Migrations/Modificar/{id}','MigrationsCrudController@show');
  Route::post('/Cruds/Migrations/GuardarEdicion/{id}','MigrationsCrudController@update');
  Route::get('/Cruds/Migrations/Eliminar/{id}','MigrationsCrudController@destroy');


  Route::get('/Cruds/Motif/lista','MotifCrudController@index');
  Route::get('/Cruds/Motif/CrearNuevo','MotifCrudController@create');
  Route::post('/Cruds/Motif/GuardarNuevo','MotifCrudController@store');
  Route::get('/Cruds/Motif/Modificar/{id}','MotifCrudController@show');
  Route::post('/Cruds/Motif/GuardarEdicion/{id}','MotifCrudController@update');
  Route::get('/Cruds/Motif/Eliminar/{id}','MotifCrudController@destroy');


  Route::get('/Cruds/Origenes/lista','OrigenesCrudController@index');
  Route::get('/Cruds/Origenes/CrearNuevo','OrigenesCrudController@create');
  Route::post('/Cruds/Origenes/GuardarNuevo','OrigenesCrudController@store');
  Route::get('/Cruds/Origenes/Modificar/{id}','OrigenesCrudController@show');
  Route::post('/Cruds/Origenes/GuardarEdicion/{id}','OrigenesCrudController@update');
  Route::get('/Cruds/Origenes/Eliminar/{id}','OrigenesCrudController@destroy');


  Route::get('/Cruds/Parameters_generals/lista','Parameters_generalsCrudController@index');
  Route::get('/Cruds/Parameters_generals/CrearNuevo','Parameters_generalsCrudController@create');
  Route::post('/Cruds/Parameters_generals/GuardarNuevo','Parameters_generalsCrudController@store');
  Route::get('/Cruds/Parameters_generals/Modificar/{id}','Parameters_generalsCrudController@show');
  Route::post('/Cruds/Parameters_generals/GuardarEdicion/{id}','Parameters_generalsCrudController@update');
  Route::get('/Cruds/Parameters_generals/Eliminar/{id}','Parameters_generalsCrudController@destroy');


  Route::get('/Cruds/Parameters_generals_users/lista','Parameters_generals_usersCrudController@index');
  Route::get('/Cruds/Parameters_generals_users/CrearNuevo','Parameters_generals_usersCrudController@create');
  Route::post('/Cruds/Parameters_generals_users/GuardarNuevo','Parameters_generals_usersCrudController@store');
  Route::get('/Cruds/Parameters_generals_users/Modificar/{id}','Parameters_generals_usersCrudController@show');
  Route::post('/Cruds/Parameters_generals_users/GuardarEdicion/{id}','Parameters_generals_usersCrudController@update');
  Route::get('/Cruds/Parameters_generals_users/Eliminar/{id}','Parameters_generals_usersCrudController@destroy');


  Route::get('/Cruds/Parameters_users/lista','Parameters_usersCrudController@index');
  Route::get('/Cruds/Parameters_users/CrearNuevo','Parameters_usersCrudController@create');
  Route::post('/Cruds/Parameters_users/GuardarNuevo','Parameters_usersCrudController@store');
  Route::get('/Cruds/Parameters_users/Modificar/{id}','Parameters_usersCrudController@show');
  Route::post('/Cruds/Parameters_users/GuardarEdicion/{id}','Parameters_usersCrudController@update');
  Route::get('/Cruds/Parameters_users/Eliminar/{id}','Parameters_usersCrudController@destroy');


  Route::get('/Cruds/Password_resets/lista','Password_resetsCrudController@index');
  Route::get('/Cruds/Password_resets/CrearNuevo','Password_resetsCrudController@create');
  Route::post('/Cruds/Password_resets/GuardarNuevo','Password_resetsCrudController@store');
  Route::get('/Cruds/Password_resets/Modificar/{id}','Password_resetsCrudController@show');
  Route::post('/Cruds/Password_resets/GuardarEdicion/{id}','Password_resetsCrudController@update');
  Route::get('/Cruds/Password_resets/Eliminar/{id}','Password_resetsCrudController@destroy');


  Route::get('/Cruds/Pbcatcol/lista','PbcatcolCrudController@index');
  Route::get('/Cruds/Pbcatcol/CrearNuevo','PbcatcolCrudController@create');
  Route::post('/Cruds/Pbcatcol/GuardarNuevo','PbcatcolCrudController@store');
  Route::get('/Cruds/Pbcatcol/Modificar/{id}','PbcatcolCrudController@show');
  Route::post('/Cruds/Pbcatcol/GuardarEdicion/{id}','PbcatcolCrudController@update');
  Route::get('/Cruds/Pbcatcol/Eliminar/{id}','PbcatcolCrudController@destroy');


  Route::get('/Cruds/Pbcatedt/lista','PbcatedtCrudController@index');
  Route::get('/Cruds/Pbcatedt/CrearNuevo','PbcatedtCrudController@create');
  Route::post('/Cruds/Pbcatedt/GuardarNuevo','PbcatedtCrudController@store');
  Route::get('/Cruds/Pbcatedt/Modificar/{id}','PbcatedtCrudController@show');
  Route::post('/Cruds/Pbcatedt/GuardarEdicion/{id}','PbcatedtCrudController@update');
  Route::get('/Cruds/Pbcatedt/Eliminar/{id}','PbcatedtCrudController@destroy');


  Route::get('/Cruds/Pbcatfmt/lista','PbcatfmtCrudController@index');
  Route::get('/Cruds/Pbcatfmt/CrearNuevo','PbcatfmtCrudController@create');
  Route::post('/Cruds/Pbcatfmt/GuardarNuevo','PbcatfmtCrudController@store');
  Route::get('/Cruds/Pbcatfmt/Modificar/{id}','PbcatfmtCrudController@show');
  Route::post('/Cruds/Pbcatfmt/GuardarEdicion/{id}','PbcatfmtCrudController@update');
  Route::get('/Cruds/Pbcatfmt/Eliminar/{id}','PbcatfmtCrudController@destroy');


  Route::get('/Cruds/Pbcattbl/lista','PbcattblCrudController@index');
  Route::get('/Cruds/Pbcattbl/CrearNuevo','PbcattblCrudController@create');
  Route::post('/Cruds/Pbcattbl/GuardarNuevo','PbcattblCrudController@store');
  Route::get('/Cruds/Pbcattbl/Modificar/{id}','PbcattblCrudController@show');
  Route::post('/Cruds/Pbcattbl/GuardarEdicion/{id}','PbcattblCrudController@update');
  Route::get('/Cruds/Pbcattbl/Eliminar/{id}','PbcattblCrudController@destroy');


  Route::get('/Cruds/Pbcatvld/lista','PbcatvldCrudController@index');
  Route::get('/Cruds/Pbcatvld/CrearNuevo','PbcatvldCrudController@create');
  Route::post('/Cruds/Pbcatvld/GuardarNuevo','PbcatvldCrudController@store');
  Route::get('/Cruds/Pbcatvld/Modificar/{id}','PbcatvldCrudController@show');
  Route::post('/Cruds/Pbcatvld/GuardarEdicion/{id}','PbcatvldCrudController@update');
  Route::get('/Cruds/Pbcatvld/Eliminar/{id}','PbcatvldCrudController@destroy');


  Route::get('/Cruds/Perfiles/lista','PerfilesCrudController@index');
  Route::get('/Cruds/Perfiles/CrearNuevo','PerfilesCrudController@create');
  Route::post('/Cruds/Perfiles/GuardarNuevo','PerfilesCrudController@store');
  Route::get('/Cruds/Perfiles/Modificar/{id}','PerfilesCrudController@show');
  Route::post('/Cruds/Perfiles/GuardarEdicion/{id}','PerfilesCrudController@update');
  Route::get('/Cruds/Perfiles/Eliminar/{id}','PerfilesCrudController@destroy');


  Route::get('/Cruds/Productos/lista','ProductosCrudController@index');
  Route::get('/Cruds/Productos/CrearNuevo','ProductosCrudController@create');
  Route::post('/Cruds/Productos/GuardarNuevo','ProductosCrudController@store');
  Route::get('/Cruds/Productos/Modificar/{id}','ProductosCrudController@show');
  Route::post('/Cruds/Productos/GuardarEdicion/{id}','ProductosCrudController@update');
  Route::get('/Cruds/Productos/Eliminar/{id}','ProductosCrudController@destroy');


  Route::get('/Cruds/Productos_codigos/lista','Productos_codigosCrudController@index');
  Route::get('/Cruds/Productos_codigos/CrearNuevo','Productos_codigosCrudController@create');
  Route::post('/Cruds/Productos_codigos/GuardarNuevo','Productos_codigosCrudController@store');
  Route::get('/Cruds/Productos_codigos/Modificar/{id}','Productos_codigosCrudController@show');
  Route::post('/Cruds/Productos_codigos/GuardarEdicion/{id}','Productos_codigosCrudController@update');
  Route::get('/Cruds/Productos_codigos/Eliminar/{id}','Productos_codigosCrudController@destroy');


  Route::get('/Cruds/Productos_lineas/lista','Productos_lineasCrudController@index');
  Route::get('/Cruds/Productos_lineas/CrearNuevo','Productos_lineasCrudController@create');
  Route::post('/Cruds/Productos_lineas/GuardarNuevo','Productos_lineasCrudController@store');
  Route::get('/Cruds/Productos_lineas/Modificar/{id}','Productos_lineasCrudController@show');
  Route::post('/Cruds/Productos_lineas/GuardarEdicion/{id}','Productos_lineasCrudController@update');
  Route::get('/Cruds/Productos_lineas/Eliminar/{id}','Productos_lineasCrudController@destroy');


  Route::get('/Cruds/Productos_marcas/lista','Productos_marcasCrudController@index');
  Route::get('/Cruds/Productos_marcas/CrearNuevo','Productos_marcasCrudController@create');
  Route::post('/Cruds/Productos_marcas/GuardarNuevo','Productos_marcasCrudController@store');
  Route::get('/Cruds/Productos_marcas/Modificar/{id}','Productos_marcasCrudController@show');
  Route::post('/Cruds/Productos_marcas/GuardarEdicion/{id}','Productos_marcasCrudController@update');
  Route::get('/Cruds/Productos_marcas/Eliminar/{id}','Productos_marcasCrudController@destroy');


  Route::get('/Cruds/Productos_modelos/lista','Productos_modelosCrudController@index');
  Route::get('/Cruds/Productos_modelos/CrearNuevo','Productos_modelosCrudController@create');
  Route::post('/Cruds/Productos_modelos/GuardarNuevo','Productos_modelosCrudController@store');
  Route::get('/Cruds/Productos_modelos/Modificar/{id}','Productos_modelosCrudController@show');
  Route::post('/Cruds/Productos_modelos/GuardarEdicion/{id}','Productos_modelosCrudController@update');
  Route::get('/Cruds/Productos_modelos/Eliminar/{id}','Productos_modelosCrudController@destroy');


  Route::get('/Cruds/Productosq/lista','ProductosqCrudController@index');
  Route::get('/Cruds/Productosq/CrearNuevo','ProductosqCrudController@create');
  Route::post('/Cruds/Productosq/GuardarNuevo','ProductosqCrudController@store');
  Route::get('/Cruds/Productosq/Modificar/{id}','ProductosqCrudController@show');
  Route::post('/Cruds/Productosq/GuardarEdicion/{id}','ProductosqCrudController@update');
  Route::get('/Cruds/Productosq/Eliminar/{id}','ProductosqCrudController@destroy');


  Route::get('/Cruds/Profiles/lista','ProfilesCrudController@index');
  Route::get('/Cruds/Profiles/CrearNuevo','ProfilesCrudController@create');
  Route::post('/Cruds/Profiles/GuardarNuevo','ProfilesCrudController@store');
  Route::get('/Cruds/Profiles/Modificar/{id}','ProfilesCrudController@show');
  Route::post('/Cruds/Profiles/GuardarEdicion/{id}','ProfilesCrudController@update');
  Route::get('/Cruds/Profiles/Eliminar/{id}','ProfilesCrudController@destroy');


  Route::get('/Cruds/Profiles_departments/lista','Profiles_departmentsCrudController@index');
  Route::get('/Cruds/Profiles_departments/CrearNuevo','Profiles_departmentsCrudController@create');
  Route::post('/Cruds/Profiles_departments/GuardarNuevo','Profiles_departmentsCrudController@store');
  Route::get('/Cruds/Profiles_departments/Modificar/{id}','Profiles_departmentsCrudController@show');
  Route::post('/Cruds/Profiles_departments/GuardarEdicion/{id}','Profiles_departmentsCrudController@update');
  Route::get('/Cruds/Profiles_departments/Eliminar/{id}','Profiles_departmentsCrudController@destroy');


  Route::get('/Cruds/Profiles_projects_descriptions/lista','Profiles_projects_descriptionsCrudController@index');
  Route::get('/Cruds/Profiles_projects_descriptions/CrearNuevo','Profiles_projects_descriptionsCrudController@create');
  Route::post('/Cruds/Profiles_projects_descriptions/GuardarNuevo','Profiles_projects_descriptionsCrudController@store');
  Route::get('/Cruds/Profiles_projects_descriptions/Modificar/{id}','Profiles_projects_descriptionsCrudController@show');
  Route::post('/Cruds/Profiles_projects_descriptions/GuardarEdicion/{id}','Profiles_projects_descriptionsCrudController@update');
  Route::get('/Cruds/Profiles_projects_descriptions/Eliminar/{id}','Profiles_projects_descriptionsCrudController@destroy');


  Route::get('/Cruds/Projects/lista','ProjectsCrudController@index');
  Route::get('/Cruds/Projects/CrearNuevo','ProjectsCrudController@create');
  Route::post('/Cruds/Projects/GuardarNuevo','ProjectsCrudController@store');
  Route::get('/Cruds/Projects/Modificar/{id}','ProjectsCrudController@show');
  Route::post('/Cruds/Projects/GuardarEdicion/{id}','ProjectsCrudController@update');
  Route::get('/Cruds/Projects/Eliminar/{id}','ProjectsCrudController@destroy');


  Route::get('/Cruds/Projects_databases/lista','Projects_databasesCrudController@index');
  Route::get('/Cruds/Projects_databases/CrearNuevo','Projects_databasesCrudController@create');
  Route::post('/Cruds/Projects_databases/GuardarNuevo','Projects_databasesCrudController@store');
  Route::get('/Cruds/Projects_databases/Modificar/{id}','Projects_databasesCrudController@show');
  Route::post('/Cruds/Projects_databases/GuardarEdicion/{id}','Projects_databasesCrudController@update');
  Route::get('/Cruds/Projects_databases/Eliminar/{id}','Projects_databasesCrudController@destroy');


  Route::get('/Cruds/Projects_db_cruds/lista','Projects_db_crudsCrudController@index');
  Route::get('/Cruds/Projects_db_cruds/CrearNuevo','Projects_db_crudsCrudController@create');
  Route::post('/Cruds/Projects_db_cruds/GuardarNuevo','Projects_db_crudsCrudController@store');
  Route::get('/Cruds/Projects_db_cruds/Modificar/{id}','Projects_db_crudsCrudController@show');
  Route::post('/Cruds/Projects_db_cruds/GuardarEdicion/{id}','Projects_db_crudsCrudController@update');
  Route::get('/Cruds/Projects_db_cruds/Eliminar/{id}','Projects_db_crudsCrudController@destroy');


  Route::get('/Cruds/Projects_db_dynamic_lists/lista','Projects_db_dynamic_listsCrudController@index');
  Route::get('/Cruds/Projects_db_dynamic_lists/CrearNuevo','Projects_db_dynamic_listsCrudController@create');
  Route::post('/Cruds/Projects_db_dynamic_lists/GuardarNuevo','Projects_db_dynamic_listsCrudController@store');
  Route::get('/Cruds/Projects_db_dynamic_lists/Modificar/{id}','Projects_db_dynamic_listsCrudController@show');
  Route::post('/Cruds/Projects_db_dynamic_lists/GuardarEdicion/{id}','Projects_db_dynamic_listsCrudController@update');
  Route::get('/Cruds/Projects_db_dynamic_lists/Eliminar/{id}','Projects_db_dynamic_listsCrudController@destroy');


  Route::get('/Cruds/Projects_db_querys/lista','Projects_db_querysCrudController@index');
  Route::get('/Cruds/Projects_db_querys/CrearNuevo','Projects_db_querysCrudController@create');
  Route::post('/Cruds/Projects_db_querys/GuardarNuevo','Projects_db_querysCrudController@store');
  Route::get('/Cruds/Projects_db_querys/Modificar/{id}','Projects_db_querysCrudController@show');
  Route::post('/Cruds/Projects_db_querys/GuardarEdicion/{id}','Projects_db_querysCrudController@update');
  Route::get('/Cruds/Projects_db_querys/Eliminar/{id}','Projects_db_querysCrudController@destroy');


  Route::get('/Cruds/Projects_descriptions/lista','Projects_descriptionsCrudController@index');
  Route::get('/Cruds/Projects_descriptions/CrearNuevo','Projects_descriptionsCrudController@create');
  Route::post('/Cruds/Projects_descriptions/GuardarNuevo','Projects_descriptionsCrudController@store');
  Route::get('/Cruds/Projects_descriptions/Modificar/{id}','Projects_descriptionsCrudController@show');
  Route::post('/Cruds/Projects_descriptions/GuardarEdicion/{id}','Projects_descriptionsCrudController@update');
  Route::get('/Cruds/Projects_descriptions/Eliminar/{id}','Projects_descriptionsCrudController@destroy');


  Route::get('/Cruds/Projects_modules/lista','Projects_modulesCrudController@index');
  Route::get('/Cruds/Projects_modules/CrearNuevo','Projects_modulesCrudController@create');
  Route::post('/Cruds/Projects_modules/GuardarNuevo','Projects_modulesCrudController@store');
  Route::get('/Cruds/Projects_modules/Modificar/{id}','Projects_modulesCrudController@show');
  Route::post('/Cruds/Projects_modules/GuardarEdicion/{id}','Projects_modulesCrudController@update');
  Route::get('/Cruds/Projects_modules/Eliminar/{id}','Projects_modulesCrudController@destroy');


  Route::get('/Cruds/Projects_sections/lista','Projects_sectionsCrudController@index');
  Route::get('/Cruds/Projects_sections/CrearNuevo','Projects_sectionsCrudController@create');
  Route::post('/Cruds/Projects_sections/GuardarNuevo','Projects_sectionsCrudController@store');
  Route::get('/Cruds/Projects_sections/Modificar/{id}','Projects_sectionsCrudController@show');
  Route::post('/Cruds/Projects_sections/GuardarEdicion/{id}','Projects_sectionsCrudController@update');
  Route::get('/Cruds/Projects_sections/Eliminar/{id}','Projects_sectionsCrudController@destroy');


  Route::get('/Cruds/Projectsdescriptions/lista','ProjectsdescriptionsCrudController@index');
  Route::get('/Cruds/Projectsdescriptions/CrearNuevo','ProjectsdescriptionsCrudController@create');
  Route::post('/Cruds/Projectsdescriptions/GuardarNuevo','ProjectsdescriptionsCrudController@store');
  Route::get('/Cruds/Projectsdescriptions/Modificar/{id}','ProjectsdescriptionsCrudController@show');
  Route::post('/Cruds/Projectsdescriptions/GuardarEdicion/{id}','ProjectsdescriptionsCrudController@update');
  Route::get('/Cruds/Projectsdescriptions/Eliminar/{id}','ProjectsdescriptionsCrudController@destroy');


  Route::get('/Cruds/Projectsmodules/lista','ProjectsmodulesCrudController@index');
  Route::get('/Cruds/Projectsmodules/CrearNuevo','ProjectsmodulesCrudController@create');
  Route::post('/Cruds/Projectsmodules/GuardarNuevo','ProjectsmodulesCrudController@store');
  Route::get('/Cruds/Projectsmodules/Modificar/{id}','ProjectsmodulesCrudController@show');
  Route::post('/Cruds/Projectsmodules/GuardarEdicion/{id}','ProjectsmodulesCrudController@update');
  Route::get('/Cruds/Projectsmodules/Eliminar/{id}','ProjectsmodulesCrudController@destroy');


  Route::get('/Cruds/Proveedores/lista','ProveedoresCrudController@index');
  Route::get('/Cruds/Proveedores/CrearNuevo','ProveedoresCrudController@create');
  Route::post('/Cruds/Proveedores/GuardarNuevo','ProveedoresCrudController@store');
  Route::get('/Cruds/Proveedores/Modificar/{id}','ProveedoresCrudController@show');
  Route::post('/Cruds/Proveedores/GuardarEdicion/{id}','ProveedoresCrudController@update');
  Route::get('/Cruds/Proveedores/Eliminar/{id}','ProveedoresCrudController@destroy');


  Route::get('/Cruds/Requisicion/lista','RequisicionCrudController@index');
  Route::get('/Cruds/Requisicion/CrearNuevo','RequisicionCrudController@create');
  Route::post('/Cruds/Requisicion/GuardarNuevo','RequisicionCrudController@store');
  Route::get('/Cruds/Requisicion/Modificar/{id}','RequisicionCrudController@show');
  Route::post('/Cruds/Requisicion/GuardarEdicion/{id}','RequisicionCrudController@update');
  Route::get('/Cruds/Requisicion/Eliminar/{id}','RequisicionCrudController@destroy');


  Route::get('/Cruds/Requisicion_detalle/lista','Requisicion_detalleCrudController@index');
  Route::get('/Cruds/Requisicion_detalle/CrearNuevo','Requisicion_detalleCrudController@create');
  Route::post('/Cruds/Requisicion_detalle/GuardarNuevo','Requisicion_detalleCrudController@store');
  Route::get('/Cruds/Requisicion_detalle/Modificar/{id}','Requisicion_detalleCrudController@show');
  Route::post('/Cruds/Requisicion_detalle/GuardarEdicion/{id}','Requisicion_detalleCrudController@update');
  Route::get('/Cruds/Requisicion_detalle/Eliminar/{id}','Requisicion_detalleCrudController@destroy');


  Route::get('/Cruds/Requisicion_pre/lista','Requisicion_preCrudController@index');
  Route::get('/Cruds/Requisicion_pre/CrearNuevo','Requisicion_preCrudController@create');
  Route::post('/Cruds/Requisicion_pre/GuardarNuevo','Requisicion_preCrudController@store');
  Route::get('/Cruds/Requisicion_pre/Modificar/{id}','Requisicion_preCrudController@show');
  Route::post('/Cruds/Requisicion_pre/GuardarEdicion/{id}','Requisicion_preCrudController@update');
  Route::get('/Cruds/Requisicion_pre/Eliminar/{id}','Requisicion_preCrudController@destroy');


  Route::get('/Cruds/Rgastos_conceptos/lista','Rgastos_conceptosCrudController@index');
  Route::get('/Cruds/Rgastos_conceptos/CrearNuevo','Rgastos_conceptosCrudController@create');
  Route::post('/Cruds/Rgastos_conceptos/GuardarNuevo','Rgastos_conceptosCrudController@store');
  Route::get('/Cruds/Rgastos_conceptos/Modificar/{id}','Rgastos_conceptosCrudController@show');
  Route::post('/Cruds/Rgastos_conceptos/GuardarEdicion/{id}','Rgastos_conceptosCrudController@update');
  Route::get('/Cruds/Rgastos_conceptos/Eliminar/{id}','Rgastos_conceptosCrudController@destroy');


  Route::get('/Cruds/Tdatos/lista','TdatosCrudController@index');
  Route::get('/Cruds/Tdatos/CrearNuevo','TdatosCrudController@create');
  Route::post('/Cruds/Tdatos/GuardarNuevo','TdatosCrudController@store');
  Route::get('/Cruds/Tdatos/Modificar/{id}','TdatosCrudController@show');
  Route::post('/Cruds/Tdatos/GuardarEdicion/{id}','TdatosCrudController@update');
  Route::get('/Cruds/Tdatos/Eliminar/{id}','TdatosCrudController@destroy');


  Route::get('/Cruds/Temporada/lista','TemporadaCrudController@index');
  Route::get('/Cruds/Temporada/CrearNuevo','TemporadaCrudController@create');
  Route::post('/Cruds/Temporada/GuardarNuevo','TemporadaCrudController@store');
  Route::get('/Cruds/Temporada/Modificar/{id}','TemporadaCrudController@show');
  Route::post('/Cruds/Temporada/GuardarEdicion/{id}','TemporadaCrudController@update');
  Route::get('/Cruds/Temporada/Eliminar/{id}','TemporadaCrudController@destroy');


  Route::get('/Cruds/Type_of_destination/lista','Type_of_destinationCrudController@index');
  Route::get('/Cruds/Type_of_destination/CrearNuevo','Type_of_destinationCrudController@create');
  Route::post('/Cruds/Type_of_destination/GuardarNuevo','Type_of_destinationCrudController@store');
  Route::get('/Cruds/Type_of_destination/Modificar/{id}','Type_of_destinationCrudController@show');
  Route::post('/Cruds/Type_of_destination/GuardarEdicion/{id}','Type_of_destinationCrudController@update');
  Route::get('/Cruds/Type_of_destination/Eliminar/{id}','Type_of_destinationCrudController@destroy');


  Route::get('/Cruds/Type_of_fields/lista','Type_of_fieldsCrudController@index');
  Route::get('/Cruds/Type_of_fields/CrearNuevo','Type_of_fieldsCrudController@create');
  Route::post('/Cruds/Type_of_fields/GuardarNuevo','Type_of_fieldsCrudController@store');
  Route::get('/Cruds/Type_of_fields/Modificar/{id}','Type_of_fieldsCrudController@show');
  Route::post('/Cruds/Type_of_fields/GuardarEdicion/{id}','Type_of_fieldsCrudController@update');
  Route::get('/Cruds/Type_of_fields/Eliminar/{id}','Type_of_fieldsCrudController@destroy');


  Route::get('/Cruds/Type_of_objs/lista','Type_of_objsCrudController@index');
  Route::get('/Cruds/Type_of_objs/CrearNuevo','Type_of_objsCrudController@create');
  Route::post('/Cruds/Type_of_objs/GuardarNuevo','Type_of_objsCrudController@store');
  Route::get('/Cruds/Type_of_objs/Modificar/{id}','Type_of_objsCrudController@show');
  Route::post('/Cruds/Type_of_objs/GuardarEdicion/{id}','Type_of_objsCrudController@update');
  Route::get('/Cruds/Type_of_objs/Eliminar/{id}','Type_of_objsCrudController@destroy');


  Route::get('/Cruds/Typeofobjs/lista','TypeofobjsCrudController@index');
  Route::get('/Cruds/Typeofobjs/CrearNuevo','TypeofobjsCrudController@create');
  Route::post('/Cruds/Typeofobjs/GuardarNuevo','TypeofobjsCrudController@store');
  Route::get('/Cruds/Typeofobjs/Modificar/{id}','TypeofobjsCrudController@show');
  Route::post('/Cruds/Typeofobjs/GuardarEdicion/{id}','TypeofobjsCrudController@update');
  Route::get('/Cruds/Typeofobjs/Eliminar/{id}','TypeofobjsCrudController@destroy');


  Route::get('/Cruds/Unidad_medida/lista','Unidad_medidaCrudController@index');
  Route::get('/Cruds/Unidad_medida/CrearNuevo','Unidad_medidaCrudController@create');
  Route::post('/Cruds/Unidad_medida/GuardarNuevo','Unidad_medidaCrudController@store');
  Route::get('/Cruds/Unidad_medida/Modificar/{id}','Unidad_medidaCrudController@show');
  Route::post('/Cruds/Unidad_medida/GuardarEdicion/{id}','Unidad_medidaCrudController@update');
  Route::get('/Cruds/Unidad_medida/Eliminar/{id}','Unidad_medidaCrudController@destroy');


  Route::get('/Cruds/User_profile_basics/lista','User_profile_basicsCrudController@index');
  Route::get('/Cruds/User_profile_basics/CrearNuevo','User_profile_basicsCrudController@create');
  Route::post('/Cruds/User_profile_basics/GuardarNuevo','User_profile_basicsCrudController@store');
  Route::get('/Cruds/User_profile_basics/Modificar/{id}','User_profile_basicsCrudController@show');
  Route::post('/Cruds/User_profile_basics/GuardarEdicion/{id}','User_profile_basicsCrudController@update');
  Route::get('/Cruds/User_profile_basics/Eliminar/{id}','User_profile_basicsCrudController@destroy');


  Route::get('/Cruds/User_profile_photos/lista','User_profile_photosCrudController@index');
  Route::get('/Cruds/User_profile_photos/CrearNuevo','User_profile_photosCrudController@create');
  Route::post('/Cruds/User_profile_photos/GuardarNuevo','User_profile_photosCrudController@store');
  Route::get('/Cruds/User_profile_photos/Modificar/{id}','User_profile_photosCrudController@show');
  Route::post('/Cruds/User_profile_photos/GuardarEdicion/{id}','User_profile_photosCrudController@update');
  Route::get('/Cruds/User_profile_photos/Eliminar/{id}','User_profile_photosCrudController@destroy');


  Route::get('/Cruds/Userprofilebasics/lista','UserprofilebasicsCrudController@index');
  Route::get('/Cruds/Userprofilebasics/CrearNuevo','UserprofilebasicsCrudController@create');
  Route::post('/Cruds/Userprofilebasics/GuardarNuevo','UserprofilebasicsCrudController@store');
  Route::get('/Cruds/Userprofilebasics/Modificar/{id}','UserprofilebasicsCrudController@show');
  Route::post('/Cruds/Userprofilebasics/GuardarEdicion/{id}','UserprofilebasicsCrudController@update');
  Route::get('/Cruds/Userprofilebasics/Eliminar/{id}','UserprofilebasicsCrudController@destroy');


  Route::get('/Cruds/Userprofilephotos/lista','UserprofilephotosCrudController@index');
  Route::get('/Cruds/Userprofilephotos/CrearNuevo','UserprofilephotosCrudController@create');
  Route::post('/Cruds/Userprofilephotos/GuardarNuevo','UserprofilephotosCrudController@store');
  Route::get('/Cruds/Userprofilephotos/Modificar/{id}','UserprofilephotosCrudController@show');
  Route::post('/Cruds/Userprofilephotos/GuardarEdicion/{id}','UserprofilephotosCrudController@update');
  Route::get('/Cruds/Userprofilephotos/Eliminar/{id}','UserprofilephotosCrudController@destroy');


  Route::get('/Cruds/Users/lista','UsersCrudController@index');
  Route::get('/Cruds/Users/CrearNuevo','UsersCrudController@create');
  Route::post('/Cruds/Users/GuardarNuevo','UsersCrudController@store');
  Route::get('/Cruds/Users/Modificar/{id}','UsersCrudController@show');
  Route::post('/Cruds/Users/GuardarEdicion/{id}','UsersCrudController@update');
  Route::get('/Cruds/Users/Eliminar/{id}','UsersCrudController@destroy');


  Route::get('/Cruds/Users_profiles/lista','Users_profilesCrudController@index');
  Route::get('/Cruds/Users_profiles/CrearNuevo','Users_profilesCrudController@create');
  Route::post('/Cruds/Users_profiles/GuardarNuevo','Users_profilesCrudController@store');
  Route::get('/Cruds/Users_profiles/Modificar/{id}','Users_profilesCrudController@show');
  Route::post('/Cruds/Users_profiles/GuardarEdicion/{id}','Users_profilesCrudController@update');
  Route::get('/Cruds/Users_profiles/Eliminar/{id}','Users_profilesCrudController@destroy');


  Route::get('/Cruds/Users_projects_descriptions/lista','Users_projects_descriptionsCrudController@index');
  Route::get('/Cruds/Users_projects_descriptions/CrearNuevo','Users_projects_descriptionsCrudController@create');
  Route::post('/Cruds/Users_projects_descriptions/GuardarNuevo','Users_projects_descriptionsCrudController@store');
  Route::get('/Cruds/Users_projects_descriptions/Modificar/{id}','Users_projects_descriptionsCrudController@show');
  Route::post('/Cruds/Users_projects_descriptions/GuardarEdicion/{id}','Users_projects_descriptionsCrudController@update');
  Route::get('/Cruds/Users_projects_descriptions/Eliminar/{id}','Users_projects_descriptionsCrudController@destroy');


  Route::get('/Cruds/Users_projectsdescriptions/lista','Users_projectsdescriptionsCrudController@index');
  Route::get('/Cruds/Users_projectsdescriptions/CrearNuevo','Users_projectsdescriptionsCrudController@create');
  Route::post('/Cruds/Users_projectsdescriptions/GuardarNuevo','Users_projectsdescriptionsCrudController@store');
  Route::get('/Cruds/Users_projectsdescriptions/Modificar/{id}','Users_projectsdescriptionsCrudController@show');
  Route::post('/Cruds/Users_projectsdescriptions/GuardarEdicion/{id}','Users_projectsdescriptionsCrudController@update');
  Route::get('/Cruds/Users_projectsdescriptions/Eliminar/{id}','Users_projectsdescriptionsCrudController@destroy');


  Route::get('/Cruds/Usuarios/lista','UsuariosCrudController@index');
  Route::get('/Cruds/Usuarios/CrearNuevo','UsuariosCrudController@create');
  Route::post('/Cruds/Usuarios/GuardarNuevo','UsuariosCrudController@store');
  Route::get('/Cruds/Usuarios/Modificar/{id}','UsuariosCrudController@show');
  Route::post('/Cruds/Usuarios/GuardarEdicion/{id}','UsuariosCrudController@update');
  Route::get('/Cruds/Usuarios/Eliminar/{id}','UsuariosCrudController@destroy');


  Route::get('/Cruds/Usuarios_grp/lista','Usuarios_grpCrudController@index');
  Route::get('/Cruds/Usuarios_grp/CrearNuevo','Usuarios_grpCrudController@create');
  Route::post('/Cruds/Usuarios_grp/GuardarNuevo','Usuarios_grpCrudController@store');
  Route::get('/Cruds/Usuarios_grp/Modificar/{id}','Usuarios_grpCrudController@show');
  Route::post('/Cruds/Usuarios_grp/GuardarEdicion/{id}','Usuarios_grpCrudController@update');
  Route::get('/Cruds/Usuarios_grp/Eliminar/{id}','Usuarios_grpCrudController@destroy');


  Route::get('/Cruds/Usuarios_prd/lista','Usuarios_prdCrudController@index');
  Route::get('/Cruds/Usuarios_prd/CrearNuevo','Usuarios_prdCrudController@create');
  Route::post('/Cruds/Usuarios_prd/GuardarNuevo','Usuarios_prdCrudController@store');
  Route::get('/Cruds/Usuarios_prd/Modificar/{id}','Usuarios_prdCrudController@show');
  Route::post('/Cruds/Usuarios_prd/GuardarEdicion/{id}','Usuarios_prdCrudController@update');
  Route::get('/Cruds/Usuarios_prd/Eliminar/{id}','Usuarios_prdCrudController@destroy');


  Route::get('/Cruds/Usuarios_privilegios/lista','Usuarios_privilegiosCrudController@index');
  Route::get('/Cruds/Usuarios_privilegios/CrearNuevo','Usuarios_privilegiosCrudController@create');
  Route::post('/Cruds/Usuarios_privilegios/GuardarNuevo','Usuarios_privilegiosCrudController@store');
  Route::get('/Cruds/Usuarios_privilegios/Modificar/{id}','Usuarios_privilegiosCrudController@show');
  Route::post('/Cruds/Usuarios_privilegios/GuardarEdicion/{id}','Usuarios_privilegiosCrudController@update');
  Route::get('/Cruds/Usuarios_privilegios/Eliminar/{id}','Usuarios_privilegiosCrudController@destroy');


  Route::get('/Cruds/V_dat_requi/lista','V_dat_requiCrudController@index');
  Route::get('/Cruds/V_dat_requi/CrearNuevo','V_dat_requiCrudController@create');
  Route::post('/Cruds/V_dat_requi/GuardarNuevo','V_dat_requiCrudController@store');
  Route::get('/Cruds/V_dat_requi/Modificar/{id}','V_dat_requiCrudController@show');
  Route::post('/Cruds/V_dat_requi/GuardarEdicion/{id}','V_dat_requiCrudController@update');
  Route::get('/Cruds/V_dat_requi/Eliminar/{id}','V_dat_requiCrudController@destroy');


  Route::get('/Cruds/Vdatos/lista','VdatosCrudController@index');
  Route::get('/Cruds/Vdatos/CrearNuevo','VdatosCrudController@create');
  Route::post('/Cruds/Vdatos/GuardarNuevo','VdatosCrudController@store');
  Route::get('/Cruds/Vdatos/Modificar/{id}','VdatosCrudController@show');
  Route::post('/Cruds/Vdatos/GuardarEdicion/{id}','VdatosCrudController@update');
  Route::get('/Cruds/Vdatos/Eliminar/{id}','VdatosCrudController@destroy');


  Route::get('/Cruds/Vgrupo/lista','VgrupoCrudController@index');
  Route::get('/Cruds/Vgrupo/CrearNuevo','VgrupoCrudController@create');
  Route::post('/Cruds/Vgrupo/GuardarNuevo','VgrupoCrudController@store');
  Route::get('/Cruds/Vgrupo/Modificar/{id}','VgrupoCrudController@show');
  Route::post('/Cruds/Vgrupo/GuardarEdicion/{id}','VgrupoCrudController@update');
  Route::get('/Cruds/Vgrupo/Eliminar/{id}','VgrupoCrudController@destroy');


  Route::get('/Cruds/Vrequisition/lista','VrequisitionCrudController@index');
  Route::get('/Cruds/Vrequisition/CrearNuevo','VrequisitionCrudController@create');
  Route::post('/Cruds/Vrequisition/GuardarNuevo','VrequisitionCrudController@store');
  Route::get('/Cruds/Vrequisition/Modificar/{id}','VrequisitionCrudController@show');
  Route::post('/Cruds/Vrequisition/GuardarEdicion/{id}','VrequisitionCrudController@update');
  Route::get('/Cruds/Vrequisition/Eliminar/{id}','VrequisitionCrudController@destroy');


  Route::get('/Cruds/Trace_xe_action_map/lista','Trace_xe_action_mapCrudController@index');
  Route::get('/Cruds/Trace_xe_action_map/CrearNuevo','Trace_xe_action_mapCrudController@create');
  Route::post('/Cruds/Trace_xe_action_map/GuardarNuevo','Trace_xe_action_mapCrudController@store');
  Route::get('/Cruds/Trace_xe_action_map/Modificar/{id}','Trace_xe_action_mapCrudController@show');
  Route::post('/Cruds/Trace_xe_action_map/GuardarEdicion/{id}','Trace_xe_action_mapCrudController@update');
  Route::get('/Cruds/Trace_xe_action_map/Eliminar/{id}','Trace_xe_action_mapCrudController@destroy');


  Route::get('/Cruds/Trace_xe_event_map/lista','Trace_xe_event_mapCrudController@index');
  Route::get('/Cruds/Trace_xe_event_map/CrearNuevo','Trace_xe_event_mapCrudController@create');
  Route::post('/Cruds/Trace_xe_event_map/GuardarNuevo','Trace_xe_event_mapCrudController@store');
  Route::get('/Cruds/Trace_xe_event_map/Modificar/{id}','Trace_xe_event_mapCrudController@show');
  Route::post('/Cruds/Trace_xe_event_map/GuardarEdicion/{id}','Trace_xe_event_mapCrudController@update');
  Route::get('/Cruds/Trace_xe_event_map/Eliminar/{id}','Trace_xe_event_mapCrudController@destroy');

  
  

/*

Route::get('/pdfindex', 'PdfController@index');
  Route::get('/pdfbajar', 'PdfController@savePDF');
  Route::get('/pdfver', 'PdfController@openPDF');


  Route::get('/Cruds/Departments/lista','DepartmentsCrudController@index');
  Route::get('/Cruds/Departments/CrearNuevo','DepartmentsCrudController@create');
  Route::post('/Cruds/Departments/GuardarNuevo','DepartmentsCrudController@store');
  Route::get('/Cruds/Departments/Modificar/{id}','DepartmentsCrudController@show');
  Route::post('/Cruds/Departments/GuardarEdicion/{id}','DepartmentsCrudController@update');
  Route::get('/Cruds/Departments/Eliminar/{id}','DepartmentsCrudController@destroy');


  Route::get('/Cruds/Dictionary_words/lista','Dictionary_wordsCrudController@index');
  Route::get('/Cruds/Dictionary_words/CrearNuevo','Dictionary_wordsCrudController@create');
  Route::post('/Cruds/Dictionary_words/GuardarNuevo','Dictionary_wordsCrudController@store');
  Route::get('/Cruds/Dictionary_words/Modificar/{id}','Dictionary_wordsCrudController@show');
  Route::post('/Cruds/Dictionary_words/GuardarEdicion/{id}','Dictionary_wordsCrudController@update');
  Route::get('/Cruds/Dictionary_words/Eliminar/{id}','Dictionary_wordsCrudController@destroy');


  Route::get('/Cruds/Failed_jobs/lista','Failed_jobsCrudController@index');
  Route::get('/Cruds/Failed_jobs/CrearNuevo','Failed_jobsCrudController@create');
  Route::post('/Cruds/Failed_jobs/GuardarNuevo','Failed_jobsCrudController@store');
  Route::get('/Cruds/Failed_jobs/Modificar/{id}','Failed_jobsCrudController@show');
  Route::post('/Cruds/Failed_jobs/GuardarEdicion/{id}','Failed_jobsCrudController@update');
  Route::get('/Cruds/Failed_jobs/Eliminar/{id}','Failed_jobsCrudController@destroy');


  Route::get('/Cruds/In_activerecord/lista','In_activerecordCrudController@index');
  Route::get('/Cruds/In_activerecord/CrearNuevo','In_activerecordCrudController@create');
  Route::post('/Cruds/In_activerecord/GuardarNuevo','In_activerecordCrudController@store');
  Route::get('/Cruds/In_activerecord/Modificar/{id}','In_activerecordCrudController@show');
  Route::post('/Cruds/In_activerecord/GuardarEdicion/{id}','In_activerecordCrudController@update');
  Route::get('/Cruds/In_activerecord/Eliminar/{id}','In_activerecordCrudController@destroy');


  Route::get('/Cruds/Languages/lista','LanguagesCrudController@index');
  Route::get('/Cruds/Languages/CrearNuevo','LanguagesCrudController@create');
  Route::post('/Cruds/Languages/GuardarNuevo','LanguagesCrudController@store');
  Route::get('/Cruds/Languages/Modificar/{id}','LanguagesCrudController@show');
  Route::post('/Cruds/Languages/GuardarEdicion/{id}','LanguagesCrudController@update');
  Route::get('/Cruds/Languages/Eliminar/{id}','LanguagesCrudController@destroy');


  Route::get('/Cruds/Managements/lista','ManagementsCrudController@index');
  Route::get('/Cruds/Managements/CrearNuevo','ManagementsCrudController@create');
  Route::post('/Cruds/Managements/GuardarNuevo','ManagementsCrudController@store');
  Route::get('/Cruds/Managements/Modificar/{id}','ManagementsCrudController@show');
  Route::post('/Cruds/Managements/GuardarEdicion/{id}','ManagementsCrudController@update');
  Route::get('/Cruds/Managements/Eliminar/{id}','ManagementsCrudController@destroy');


  Route::get('/Cruds/Migrations/lista','MigrationsCrudController@index');
  Route::get('/Cruds/Migrations/CrearNuevo','MigrationsCrudController@create');
  Route::post('/Cruds/Migrations/GuardarNuevo','MigrationsCrudController@store');
  Route::get('/Cruds/Migrations/Modificar/{id}','MigrationsCrudController@show');
  Route::post('/Cruds/Migrations/GuardarEdicion/{id}','MigrationsCrudController@update');
  Route::get('/Cruds/Migrations/Eliminar/{id}','MigrationsCrudController@destroy');


  Route::get('/Cruds/Parameters_generals/lista','Parameters_generalsCrudController@index');
  Route::get('/Cruds/Parameters_generals/CrearNuevo','Parameters_generalsCrudController@create');
  Route::post('/Cruds/Parameters_generals/GuardarNuevo','Parameters_generalsCrudController@store');
  Route::get('/Cruds/Parameters_generals/Modificar/{id}','Parameters_generalsCrudController@show');
  Route::post('/Cruds/Parameters_generals/GuardarEdicion/{id}','Parameters_generalsCrudController@update');
  Route::get('/Cruds/Parameters_generals/Eliminar/{id}','Parameters_generalsCrudController@destroy');


  Route::get('/Cruds/Parameters_generals_users/lista','Parameters_generals_usersCrudController@index');
  Route::get('/Cruds/Parameters_generals_users/CrearNuevo','Parameters_generals_usersCrudController@create');
  Route::post('/Cruds/Parameters_generals_users/GuardarNuevo','Parameters_generals_usersCrudController@store');
  Route::get('/Cruds/Parameters_generals_users/Modificar/{id}','Parameters_generals_usersCrudController@show');
  Route::post('/Cruds/Parameters_generals_users/GuardarEdicion/{id}','Parameters_generals_usersCrudController@update');
  Route::get('/Cruds/Parameters_generals_users/Eliminar/{id}','Parameters_generals_usersCrudController@destroy');


  Route::get('/Cruds/Parameters_users/lista','Parameters_usersCrudController@index');
  Route::get('/Cruds/Parameters_users/CrearNuevo','Parameters_usersCrudController@create');
  Route::post('/Cruds/Parameters_users/GuardarNuevo','Parameters_usersCrudController@store');
  Route::get('/Cruds/Parameters_users/Modificar/{id}','Parameters_usersCrudController@show');
  Route::post('/Cruds/Parameters_users/GuardarEdicion/{id}','Parameters_usersCrudController@update');
  Route::get('/Cruds/Parameters_users/Eliminar/{id}','Parameters_usersCrudController@destroy');


  Route::get('/Cruds/Password_resets/lista','Password_resetsCrudController@index');
  Route::get('/Cruds/Password_resets/CrearNuevo','Password_resetsCrudController@create');
  Route::post('/Cruds/Password_resets/GuardarNuevo','Password_resetsCrudController@store');
  Route::get('/Cruds/Password_resets/Modificar/{id}','Password_resetsCrudController@show');
  Route::post('/Cruds/Password_resets/GuardarEdicion/{id}','Password_resetsCrudController@update');
  Route::get('/Cruds/Password_resets/Eliminar/{id}','Password_resetsCrudController@destroy');


  Route::get('/Cruds/Profiles/lista','ProfilesCrudController@index');
  Route::get('/Cruds/Profiles/CrearNuevo','ProfilesCrudController@create');
  Route::post('/Cruds/Profiles/GuardarNuevo','ProfilesCrudController@store');
  Route::get('/Cruds/Profiles/Modificar/{id}','ProfilesCrudController@show');
  Route::post('/Cruds/Profiles/GuardarEdicion/{id}','ProfilesCrudController@update');
  Route::get('/Cruds/Profiles/Eliminar/{id}','ProfilesCrudController@destroy');


  Route::get('/Cruds/Profiles_departments/lista','Profiles_departmentsCrudController@index');
  Route::get('/Cruds/Profiles_departments/CrearNuevo','Profiles_departmentsCrudController@create');
  Route::post('/Cruds/Profiles_departments/GuardarNuevo','Profiles_departmentsCrudController@store');
  Route::get('/Cruds/Profiles_departments/Modificar/{id}','Profiles_departmentsCrudController@show');
  Route::post('/Cruds/Profiles_departments/GuardarEdicion/{id}','Profiles_departmentsCrudController@update');
  Route::get('/Cruds/Profiles_departments/Eliminar/{id}','Profiles_departmentsCrudController@destroy');


  Route::get('/Cruds/Profiles_projects_descriptions/lista','Profiles_projects_descriptionsCrudController@index');
  Route::get('/Cruds/Profiles_projects_descriptions/CrearNuevo','Profiles_projects_descriptionsCrudController@create');
  Route::post('/Cruds/Profiles_projects_descriptions/GuardarNuevo','Profiles_projects_descriptionsCrudController@store');
  Route::get('/Cruds/Profiles_projects_descriptions/Modificar/{id}','Profiles_projects_descriptionsCrudController@show');
  Route::post('/Cruds/Profiles_projects_descriptions/GuardarEdicion/{id}','Profiles_projects_descriptionsCrudController@update');
  Route::get('/Cruds/Profiles_projects_descriptions/Eliminar/{id}','Profiles_projects_descriptionsCrudController@destroy');


  Route::get('/Cruds/Projects/lista','ProjectsCrudController@index');
  Route::get('/Cruds/Projects/CrearNuevo','ProjectsCrudController@create');
  Route::post('/Cruds/Projects/GuardarNuevo','ProjectsCrudController@store');
  Route::get('/Cruds/Projects/Modificar/{id}','ProjectsCrudController@show');
  Route::post('/Cruds/Projects/GuardarEdicion/{id}','ProjectsCrudController@update');
  Route::get('/Cruds/Projects/Eliminar/{id}','ProjectsCrudController@destroy');


  Route::get('/Cruds/Projects_databases/lista','Projects_databasesCrudController@index');
  Route::get('/Cruds/Projects_databases/CrearNuevo','Projects_databasesCrudController@create');
  Route::post('/Cruds/Projects_databases/GuardarNuevo','Projects_databasesCrudController@store');
  Route::get('/Cruds/Projects_databases/Modificar/{id}','Projects_databasesCrudController@show');
  Route::post('/Cruds/Projects_databases/GuardarEdicion/{id}','Projects_databasesCrudController@update');
  Route::get('/Cruds/Projects_databases/Eliminar/{id}','Projects_databasesCrudController@destroy');


  Route::get('/Cruds/Projects_db_cruds/lista','Projects_db_crudsCrudController@index');
  Route::get('/Cruds/Projects_db_cruds/CrearNuevo','Projects_db_crudsCrudController@create');
  Route::post('/Cruds/Projects_db_cruds/GuardarNuevo','Projects_db_crudsCrudController@store');
  Route::get('/Cruds/Projects_db_cruds/Modificar/{id}','Projects_db_crudsCrudController@show');
  Route::post('/Cruds/Projects_db_cruds/GuardarEdicion/{id}','Projects_db_crudsCrudController@update');
  Route::get('/Cruds/Projects_db_cruds/Eliminar/{id}','Projects_db_crudsCrudController@destroy');


  Route::get('/Cruds/Projects_db_dynamic_lists/lista','Projects_db_dynamic_listsCrudController@index');
  Route::get('/Cruds/Projects_db_dynamic_lists/CrearNuevo','Projects_db_dynamic_listsCrudController@create');
  Route::post('/Cruds/Projects_db_dynamic_lists/GuardarNuevo','Projects_db_dynamic_listsCrudController@store');
  Route::get('/Cruds/Projects_db_dynamic_lists/Modificar/{id}','Projects_db_dynamic_listsCrudController@show');
  Route::post('/Cruds/Projects_db_dynamic_lists/GuardarEdicion/{id}','Projects_db_dynamic_listsCrudController@update');
  Route::get('/Cruds/Projects_db_dynamic_lists/Eliminar/{id}','Projects_db_dynamic_listsCrudController@destroy');


  Route::get('/Cruds/Projects_db_querys/lista','Projects_db_querysCrudController@index');
  Route::get('/Cruds/Projects_db_querys/CrearNuevo','Projects_db_querysCrudController@create');
  Route::post('/Cruds/Projects_db_querys/GuardarNuevo','Projects_db_querysCrudController@store');
  Route::get('/Cruds/Projects_db_querys/Modificar/{id}','Projects_db_querysCrudController@show');
  Route::post('/Cruds/Projects_db_querys/GuardarEdicion/{id}','Projects_db_querysCrudController@update');
  Route::get('/Cruds/Projects_db_querys/Eliminar/{id}','Projects_db_querysCrudController@destroy');


  Route::get('/Cruds/Projects_descriptions/lista','Projects_descriptionsCrudController@index');
  Route::get('/Cruds/Projects_descriptions/CrearNuevo','Projects_descriptionsCrudController@create');
  Route::post('/Cruds/Projects_descriptions/GuardarNuevo','Projects_descriptionsCrudController@store');
  Route::get('/Cruds/Projects_descriptions/Modificar/{id}','Projects_descriptionsCrudController@show');
  Route::post('/Cruds/Projects_descriptions/GuardarEdicion/{id}','Projects_descriptionsCrudController@update');
  Route::get('/Cruds/Projects_descriptions/Eliminar/{id}','Projects_descriptionsCrudController@destroy');


  Route::get('/Cruds/Projects_modules/lista','Projects_modulesCrudController@index');
  Route::get('/Cruds/Projects_modules/CrearNuevo','Projects_modulesCrudController@create');
  Route::post('/Cruds/Projects_modules/GuardarNuevo','Projects_modulesCrudController@store');
  Route::get('/Cruds/Projects_modules/Modificar/{id}','Projects_modulesCrudController@show');
  Route::post('/Cruds/Projects_modules/GuardarEdicion/{id}','Projects_modulesCrudController@update');
  Route::get('/Cruds/Projects_modules/Eliminar/{id}','Projects_modulesCrudController@destroy');


  Route::get('/Cruds/Projects_sections/lista','Projects_sectionsCrudController@index');
  Route::get('/Cruds/Projects_sections/CrearNuevo','Projects_sectionsCrudController@create');
  Route::post('/Cruds/Projects_sections/GuardarNuevo','Projects_sectionsCrudController@store');
  Route::get('/Cruds/Projects_sections/Modificar/{id}','Projects_sectionsCrudController@show');
  Route::post('/Cruds/Projects_sections/GuardarEdicion/{id}','Projects_sectionsCrudController@update');
  Route::get('/Cruds/Projects_sections/Eliminar/{id}','Projects_sectionsCrudController@destroy');


  Route::get('/Cruds/Type_of_destination/lista','Type_of_destinationCrudController@index');
  Route::get('/Cruds/Type_of_destination/CrearNuevo','Type_of_destinationCrudController@create');
  Route::post('/Cruds/Type_of_destination/GuardarNuevo','Type_of_destinationCrudController@store');
  Route::get('/Cruds/Type_of_destination/Modificar/{id}','Type_of_destinationCrudController@show');
  Route::post('/Cruds/Type_of_destination/GuardarEdicion/{id}','Type_of_destinationCrudController@update');
  Route::get('/Cruds/Type_of_destination/Eliminar/{id}','Type_of_destinationCrudController@destroy');


  Route::get('/Cruds/Type_of_fields/lista','Type_of_fieldsCrudController@index');
  Route::get('/Cruds/Type_of_fields/CrearNuevo','Type_of_fieldsCrudController@create');
  Route::post('/Cruds/Type_of_fields/GuardarNuevo','Type_of_fieldsCrudController@store');
  Route::get('/Cruds/Type_of_fields/Modificar/{id}','Type_of_fieldsCrudController@show');
  Route::post('/Cruds/Type_of_fields/GuardarEdicion/{id}','Type_of_fieldsCrudController@update');
  Route::get('/Cruds/Type_of_fields/Eliminar/{id}','Type_of_fieldsCrudController@destroy');


  Route::get('/Cruds/Type_of_objs/lista','Type_of_objsCrudController@index');
  Route::get('/Cruds/Type_of_objs/CrearNuevo','Type_of_objsCrudController@create');
  Route::post('/Cruds/Type_of_objs/GuardarNuevo','Type_of_objsCrudController@store');
  Route::get('/Cruds/Type_of_objs/Modificar/{id}','Type_of_objsCrudController@show');
  Route::post('/Cruds/Type_of_objs/GuardarEdicion/{id}','Type_of_objsCrudController@update');
  Route::get('/Cruds/Type_of_objs/Eliminar/{id}','Type_of_objsCrudController@destroy');


  Route::get('/Cruds/Users/lista','UsersCrudController@index');
  Route::get('/Cruds/Users/CrearNuevo','UsersCrudController@create');
  Route::post('/Cruds/Users/GuardarNuevo','UsersCrudController@store');
  Route::get('/Cruds/Users/Modificar/{id}','UsersCrudController@show');
  Route::post('/Cruds/Users/GuardarEdicion/{id}','UsersCrudController@update');
  Route::get('/Cruds/Users/Eliminar/{id}','UsersCrudController@destroy');


  Route::get('/Cruds/Users_profiles/lista','Users_profilesCrudController@index');
  Route::get('/Cruds/Users_profiles/CrearNuevo','Users_profilesCrudController@create');
  Route::post('/Cruds/Users_profiles/GuardarNuevo','Users_profilesCrudController@store');
  Route::get('/Cruds/Users_profiles/Modificar/{id}','Users_profilesCrudController@show');
  Route::post('/Cruds/Users_profiles/GuardarEdicion/{id}','Users_profilesCrudController@update');
  Route::get('/Cruds/Users_profiles/Eliminar/{id}','Users_profilesCrudController@destroy');


  Route::get('/Cruds/Users_projects_descriptions/lista','Users_projects_descriptionsCrudController@index');
  Route::get('/Cruds/Users_projects_descriptions/CrearNuevo','Users_projects_descriptionsCrudController@create');
  Route::post('/Cruds/Users_projects_descriptions/GuardarNuevo','Users_projects_descriptionsCrudController@store');
  Route::get('/Cruds/Users_projects_descriptions/Modificar/{id}','Users_projects_descriptionsCrudController@show');
  Route::post('/Cruds/Users_projects_descriptions/GuardarEdicion/{id}','Users_projects_descriptionsCrudController@update');
  Route::get('/Cruds/Users_projects_descriptions/Eliminar/{id}','Users_projects_descriptionsCrudController@destroy');


  Route::get('/Cruds/User_profile_basics/lista','User_profile_basicsCrudController@index');
  Route::get('/Cruds/User_profile_basics/CrearNuevo','User_profile_basicsCrudController@create');
  Route::post('/Cruds/User_profile_basics/GuardarNuevo','User_profile_basicsCrudController@store');
  Route::get('/Cruds/User_profile_basics/Modificar/{id}','User_profile_basicsCrudController@show');
  Route::post('/Cruds/User_profile_basics/GuardarEdicion/{id}','User_profile_basicsCrudController@update');
  Route::get('/Cruds/User_profile_basics/Eliminar/{id}','User_profile_basicsCrudController@destroy');


  Route::get('/Cruds/User_profile_photos/lista','User_profile_photosCrudController@index');
  Route::get('/Cruds/User_profile_photos/CrearNuevo','User_profile_photosCrudController@create');
  Route::post('/Cruds/User_profile_photos/GuardarNuevo','User_profile_photosCrudController@store');
  Route::get('/Cruds/User_profile_photos/Modificar/{id}','User_profile_photosCrudController@show');
  Route::post('/Cruds/User_profile_photos/GuardarEdicion/{id}','User_profile_photosCrudController@update');
  Route::get('/Cruds/User_profile_photos/Eliminar/{id}','User_profile_photosCrudController@destroy');

*/