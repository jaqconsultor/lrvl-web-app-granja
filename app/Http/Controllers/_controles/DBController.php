<?php

namespace App\Http\Controllers;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Departments;
use Session;
use DB;

class DBController extends Controller
{

    public function create()
    {

        $this->up();
    }

    public function rollback()
    {
        $this->down();
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->integer('price');
            $table->boolean('availability');
        });


                    Schema::create('password_resets', function (Blueprint $table) {
                        $table->string('email',190)->index();
                        $table->string('token');
                        $table->timestamp('created_at')->nullable();
                    });

                    Schema::create('failed_jobs', function (Blueprint $table) {
                        $table->bigIncrements('id');
                        $table->text('connection');
                        $table->text('queue');
                        $table->longText('payload');
                        $table->longText('exception');
                        $table->timestamp('failed_at')->useCurrent();
                    });

                   Schema::create('departments', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_managements')->unsigned()->nullable();
                   $table->integer('id_projects')->unsigned()->nullable();
                   $table->string('nb_department',190)->unique();
                   $table->string('nb_acronym',190)->unique()->nullable();
                   $table->integer('in_activerecord')->default(1);
                   });
                    
                   Schema::create('dictionary_words', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->string('nb_variable',190);
                   $table->string('nb_value',255);
                   $table->integer('id_languages')->unsigned()->nullable();
                   });
                    
                   Schema::create('in_activerecord', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('in_activerecord')->unique()->nullable()->comment('1 o 0');
                   $table->string('nb_activerecord',2)->unique()->nullable()->comment('SI o NO');
                   });
                    
                   Schema::create('languages', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->string('nb_languages',190)->unique();
                   $table->string('nb_acronym',190)->unique();
                   $table->integer('in_activerecord')->default(1);
                   });
                    
                   Schema::create('managements', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_projects')->unsigned()->nullable();
                   $table->string('nb_management',190)->unique();
                   $table->string('nb_acronym',190)->unique()->nullable();
                   $table->integer('in_activerecord')->default(1);
                   });
                    
                   Schema::create('parameters_generals', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_projects')->unsigned()->nullable();                                      
                   $table->integer('id_projects_modules')->unsigned();
                   $table->integer('id_projects_sections')->unsigned()->nullable();
                   $table->string('nb_parameter',190);
                   $table->string('tx_value',200);
                   $table->integer('in_activerecord')->default(1);
                   $table->string('tx_description',200)->nullable();
                   });

                   Schema::create('parameters_generals_users', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_projects')->unsigned()->nullable();                                      
                   $table->integer('id_projects_modules')->unsigned();
                   $table->integer('id_projects_sections')->unsigned()->nullable();
                   $table->string('nb_parameter',200);
                   $table->string('tx_value',200);
                   $table->string('tx_description',200)->nullable();
                   });
                    
                   Schema::create('parameters_users', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_projects')->unsigned()->nullable();                                      
                   $table->integer('id_projects_modules')->unsigned();
                   $table->integer('id_projects_sections')->unsigned()->nullable();
                   $table->string('nb_parameter',200);
                   $table->string('tx_value',200);
                   $table->integer('id_users')->unsigned();
                   $table->string('tx_description',200)->nullable();
                   });
                    
                   Schema::create('profiles', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->string('nb_profile',190)->unique();
                   $table->string('tx_description',200)->nullable();
                   $table->integer('in_activerecord')->default(1);
                   });
                    
                   Schema::create('profiles_departments', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_profiles')->unsigned()->nullable();
                   $table->integer('id_departments')->unsigned()->nullable();
                   });
                    
                   Schema::create('profiles_projects_descriptions', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_profiles')->unsigned()->nullable();
                   $table->integer('id_descriptions_objects')->unsigned()->nullable();
                   $table->integer('in_activerecord')->default(1);
                   });
                    
                   Schema::create('projects', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->string('nb_project',190)->unique();
                   $table->string('nb_description',200)->nullable();
                   $table->string('nb_acronym',190)->unique();
                   $table->integer('in_activo')->default(1);
                   });
                    
                   Schema::create('projects_descriptions', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_projects_modules')->unsigned()->nullable();
                   $table->integer('id_projects_sections')->unsigned()->nullable();
                   $table->integer('id_type_of_objs')->unsigned()->nullable();
                   $table->integer('id_projects')->unsigned()->nullable();
                   $table->integer('id_destination')->unsigned()->nullable();
                   $table->integer('id_type_of_destination')->unsigned()->nullable();
                   $table->integer('nu_order')->nullable();
                   $table->integer('nu_order1')->nullable();
                   $table->integer('nu_order2')->nullable();
                   $table->string('tx_fir_option',200)->nullable();
                   $table->string('tx_sec_option',200)->nullable();
                   $table->string('tx_thi_option',200)->nullable();
                   $table->string('tx_description',255)->nullable();
                   $table->string('tx_icon',200)->nullable();
                   $table->string('tx_destination',255)->nullable();
                   $table->string('nb_parameter',255)->nullable();
                   $table->string('tx_value_parameter',255)->nullable();
                   });
                    
                   Schema::create('projects_modules', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_projects')->unsigned()->nullable();
                   $table->string('nb_module',190);
                   $table->integer('in_activerecord')->default(1);
				   $table->integer('nu_order')->default(1);
                   });
                    
                   Schema::create('projects_sections', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();

                   $table->integer('id_projects')->unsigned()->nullable();
				   $table->integer('id_projects_modules')->unsigned()->nullable();
                   $table->string('nb_sections',190);
                   $table->integer('in_activerecord')->default(1);
                   });
                    
                   Schema::create('projects_databases', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_projects')->unsigned()->nullable();
                   $table->integer('id_projects_modules')->unsigned()->nullable();
                   $table->integer('id_projects_sections')->unsigned()->nullable();
                   $table->string('nb_databases',200);
                   $table->string('nb_acronym',50);
                   });
                    
                   Schema::create('projects_db_querys', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_projects_databases')->unsigned()->nullable();
                   $table->integer('id_projects')->unsigned()->nullable();
                   $table->integer('in_activerecord')->default(1);
                   $table->string('tx_description',255)->nullable();
                   $table->mediumText('tx_sql')->nullable();
                   $table->integer('in_ejecuted')->default(0);
                   });
                    
                   Schema::create('projects_db_cruds', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_projects_databases')->unsigned()->nullable();
                   $table->integer('id_projects')->unsigned()->nullable();
                   $table->string('nb_cruds',100);
                   $table->string('nb_owner',100)->nullable();
                   $table->string('nb_tabla',100);
                   $table->string('nb_campo',100);
                   $table->integer('id_type_of_fields')->unsigned()->nullable();
                   $table->string('tx_tipo_de_llenado',100)->comment('Se llena con un - crud, dynamiclist - sql ');
                   });
                    
                   Schema::create('projects_db_dynamic_lists', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_projects_databases')->unsigned()->nullable();
                   $table->integer('id_projects')->unsigned()->nullable();
                   $table->string('nb_lists',100);
                   $table->string('co_lists',20);
                   $table->string('nb_descripcion',190);
                   });
                    
                   Schema::create('type_of_objs', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->string('nb_type_of_objs',190)->unique()->comment('Indica si es un Menu, Toolbar, PopPup Menu');
                   $table->string('nb_acronym',190)->unique()->nullable();
                   });

                   Schema::create('type_of_destination', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->string('nb_type_of_destination',190)->unique()->comment('Indica si es un Proyecto, Modulo, Crud, Scroll, Edita');
                   $table->string('nb_acronym',190)->unique()->nullable();
                   });

                   Schema::create('type_of_fields', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->string('nb_type_of_fields',190)->unique()->comment('Indica si es un String, Fecha, Numero, Etc');;
                   $table->string('nb_acronym',190)->unique()->nullable()->comment('Valores caracter, numeric, date, time, datetime, double');
                   });

                   Schema::create('user_profile_basics', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_users')->unsigned();
                   });
                    
                   Schema::create('user_profile_photos', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->string('tx_photofile',190)->unique();
                   $table->integer('id_users')->unsigned();

                   });
                    

                   Schema::create('users', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->string('login',190)->unique();
                   $table->string('name',200);
                   $table->string('email',190)->unique();
                   $table->string('password',200);
                   $table->string('remember_token',100)->nullable();
                   $table->integer('in_verified')->default(0);
                   $table->integer('in_firstime')->default(0);
                   $table->timestamp('email_verified_at')->nullable();
                   $table->integer('in_activerecord')->default(1);
                   $table->integer('id_profiles')->unsigned();
                   });

                   
                    
                   Schema::create('users_profiles', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_users')->unsigned();
                   $table->integer('id_profiles')->unsigned();
                   $table->datetime('fe_vencimiento')->nullable();
                   $table->integer('in_activerecord')->default(1);
                   });
                    
                   Schema::create('users_projects_descriptions', function (Blueprint $table) {
                   $table->increments('id');
                   $table->timestamps();
                   $table->integer('id_users')->unsigned();
                   $table->integer('id_projects_descriptions')->unsigned();
                   $table->datetime('fe_vencimiento')->nullable();
                   $table->integer('in_activerecord')->default(1);
                   });
                    
                   $this->relaciones();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

                   Schema::disableForeignKeyConstraints();

                  Schema::dropIfExists('products');

                   Schema::dropIfExists('failed_jobs');
                   Schema::dropIfExists('password_resets');
                   Schema::dropIfExists('departments');
                   Schema::dropIfExists('dictionary_words');
                   Schema::dropIfExists('in_activerecord');
                   Schema::dropIfExists('languages');
                   Schema::dropIfExists('managements');
                   Schema::dropIfExists('parameters_generals');
                   Schema::dropIfExists('parameters_generals_users');
                   Schema::dropIfExists('parameters_users');
                   Schema::dropIfExists('profiles');
                   Schema::dropIfExists('profiles_departments');
                   Schema::dropIfExists('profiles_projects_descriptions');
                   Schema::dropIfExists('projects');
                   Schema::dropIfExists('projects_descriptions');
                   Schema::dropIfExists('projects_modules');
                   Schema::dropIfExists('projects_sections');
                   Schema::dropIfExists('projects_databases');
                   Schema::dropIfExists('projects_db_querys');
                   Schema::dropIfExists('projects_db_cruds');
                   Schema::dropIfExists('projects_db_dynamic_lists');
                   Schema::dropIfExists('type_of_objs');
                   Schema::dropIfExists('type_of_fields');
                   Schema::dropIfExists('type_of_destination');
                   Schema::dropIfExists('user_profile_basics');
                   Schema::dropIfExists('user_profile_photos');
                   Schema::dropIfExists('users');
                   Schema::dropIfExists('users_profiles');
                   Schema::dropIfExists('users_projects_descriptions');
                    
                   Schema::enableForeignKeyConstraints();
                    

    }

    /**
     * Relaciones de las Tablas.
     *
     * @return void
     */
    public function relaciones()
    {

                   Schema::table('departments', function (Blueprint $table) {
                   $table->foreign('id_managements','fk_reference_4')->references('id')->on('managements');
                   });

                   Schema::table('departments', function (Blueprint $table) {
                   $table->foreign('id_projects','fk_reference_dep_802')->references('id')->on('projects');
                   });

                   Schema::table('managements', function (Blueprint $table) {
                   $table->foreign('id_projects','fk_reference_man_802')->references('id')->on('projects');
                   });

                   Schema::table('dictionary_words', function (Blueprint $table) {
                   $table->foreign('id_languages','fk_reference_49')->references('id')->on('languages');
                   });
                   
                   Schema::table('parameters_users', function (Blueprint $table) {
                   $table->foreign('id_users','fk_reference_36')->references('id')->on('users');
                   });
                   
                   Schema::table('profiles_departments', function (Blueprint $table) {
                   $table->foreign('id_departments','fk_reference_5')->references('id')->on('departments');
                   });
                   
                   Schema::table('profiles_departments', function (Blueprint $table) {
                   $table->foreign('id_profiles','fk_reference_7')->references('id')->on('profiles');
                   });
                   
                   Schema::table('profiles_projects_descriptions', function (Blueprint $table) {
                   $table->foreign('id_profiles','fk_reference_21')->references('id')->on('profiles');
                   });
                   
                   Schema::table('profiles_projects_descriptions', function (Blueprint $table) {
                   $table->foreign('id_descriptions_objects','fk_reference_20')->references('id')->on('projects_descriptions');
                   });
                   
                   Schema::table('projects_descriptions', function (Blueprint $table) {
                   $table->foreign('id_projects','fk_reference_802')->references('id')->on('projects');
                   });

                   Schema::table('projects_descriptions', function (Blueprint $table) {
                   $table->foreign('id_projects_modules','fk_reference_14')->references('id')->on('projects_modules');
                   });
                   
                   Schema::table('projects_descriptions', function (Blueprint $table) {
                   $table->foreign('id_projects_sections','fk_reference_140')->references('id')->on('projects_sections');
                   });
                   
                   Schema::table('projects_sections', function (Blueprint $table) {
                   $table->foreign('id_projects_modules','fk_reference_ps_14')->references('id')->on('projects_modules');
                   });
				   
                   Schema::table('projects_descriptions', function (Blueprint $table) {
                   $table->foreign('id_type_of_objs','fk_reference_8')->references('id')->on('type_of_objs');
                   });
                   
                   Schema::table('projects_descriptions', function (Blueprint $table) {
                   $table->foreign('id_type_of_destination','fk_reference_pdecr_8')->references('id')->on('type_of_destination');
                   });

                   Schema::table('projects_modules', function (Blueprint $table) {
                   $table->foreign('id_projects','fk_reference_13')->references('id')->on('projects');
                   });
                   
                   Schema::table('projects_sections', function (Blueprint $table) {
                   $table->foreign('id_projects','fk_reference_131')->references('id')->on('projects');
                   });
                   
                   Schema::table('projects_databases', function (Blueprint $table) {
                   $table->foreign('id_projects','fk_reference_202')->references('id')->on('projects');
                   });
                   
                   Schema::table('projects_databases', function (Blueprint $table) {
                   $table->foreign('id_projects_modules','fk_reference_db_202')->references('id')->on('projects_modules');
                   });

                   Schema::table('projects_databases', function (Blueprint $table) {
                   $table->foreign('id_projects_sections','fk_reference_db_140')->references('id')->on('projects_sections');
                   });

                   Schema::table('projects_db_querys', function (Blueprint $table) {
                   $table->foreign('id_projects','fk_reference_dbq_200')->references('id')->on('projects');
                   });
                   
                   Schema::table('projects_db_querys', function (Blueprint $table) {
                   $table->foreign('id_projects_databases','fk_reference_dbq_201')->references('id')->on('projects_databases');
                   });
                   
                   Schema::table('projects_db_cruds', function (Blueprint $table) {
                   $table->foreign('id_projects','fk_reference_250')->references('id')->on('projects');
                   });
                   
                   Schema::table('projects_db_cruds', function (Blueprint $table) {
                   $table->foreign('id_projects_databases','fk_reference_251')->references('id')->on('projects_databases');
                   });

                   Schema::table('projects_db_cruds', function (Blueprint $table) {
                   $table->foreign('id_type_of_fields','fk_reference_crud_251')->references('id')->on('type_of_fields');
                   });
                   
                   Schema::table('projects_db_dynamic_lists', function (Blueprint $table) {
                   $table->foreign('id_projects','fk_reference_355')->references('id')->on('projects');
                   });
                   
                   Schema::table('projects_db_dynamic_lists', function (Blueprint $table) {
                   $table->foreign('id_projects_databases','fk_reference_356')->references('id')->on('projects_databases');
                   });
                   
                   Schema::table('user_profile_basics', function (Blueprint $table) {
                   $table->foreign('id_users','fk_reference_34')->references('id')->on('users');
                   });
                   
                   Schema::table('user_profile_photos', function (Blueprint $table) {
                   $table->foreign('id_users','fk_reference_40')->references('id')->on('users');
                   });
                   
                   Schema::table('users_profiles', function (Blueprint $table) {
                   $table->foreign('id_profiles','fk_reference_17')->references('id')->on('profiles');
                   });
                   
                   Schema::table('users_profiles', function (Blueprint $table) {
                   $table->foreign('id_users','fk_reference_16')->references('id')->on('users');
                   });
                   
                   Schema::table('users_projects_descriptions', function (Blueprint $table) {
                   $table->foreign('id_projects_descriptions','fk_reference_19')->references('id')->on('projects_descriptions');
                   });
                   
                   Schema::table('users_projects_descriptions', function (Blueprint $table) {
                   $table->foreign('id_users','fk_reference_18')->references('id')->on('users');
                   });
                   

                   Schema::table('parameters_generals', function (Blueprint $table) {
                   $table->foreign('id_projects','fk_reference_pg_802')->references('id')->on('projects');
                   });

                   Schema::table('parameters_generals', function (Blueprint $table) {
                   $table->foreign('id_projects_modules','fk_reference_pg_14')->references('id')->on('projects_modules');
                   });
                   
                   Schema::table('parameters_generals', function (Blueprint $table) {
                   $table->foreign('id_projects_sections','fk_reference_pg_140')->references('id')->on('projects_sections');
                   });


                   Schema::table('parameters_users', function (Blueprint $table) {
                   $table->foreign('id_projects','fk_reference_pu_802')->references('id')->on('projects');
                   });

                   Schema::table('parameters_users', function (Blueprint $table) {
                   $table->foreign('id_projects_modules','fk_reference_pu_14')->references('id')->on('projects_modules');
                   });
                   
                   Schema::table('parameters_users', function (Blueprint $table) {
                   $table->foreign('id_projects_sections','fk_reference_pu_140')->references('id')->on('projects_sections');
                   });

    }


 
}

