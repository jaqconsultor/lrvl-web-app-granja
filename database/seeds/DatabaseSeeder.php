<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); 

                    
                   DB::table('departments')->truncate();
                    
                    
                   DB::table('dictionary_words')->truncate();
                    
                    
                   DB::table('failed_jobs')->truncate();
                    
                    
                   DB::table('in_activerecord')->truncate();
                    
                    
                   DB::table('languages')->truncate();
                    
                    
                   DB::table('managements')->truncate();
                    
                    
                   DB::table('migrations')->truncate();
                    
                    
                   DB::table('parameters_generals')->truncate();
                    
                    
                   DB::table('parameters_generals_users')->truncate();
                    
                    
                   DB::table('parameters_users')->truncate();
                    
                    
                   DB::table('password_resets')->truncate();
                    
                    
                   DB::table('profiles')->truncate();
                    
                    
                   DB::table('profiles_departments')->truncate();
                    
                    
                   DB::table('profiles_projects_descriptions')->truncate();
                    
                    
                   DB::table('projects')->truncate();
                    
                    
                   DB::table('projects_databases')->truncate();
                    
                    
                   DB::table('projects_db_cruds')->truncate();
                    
                    
                   DB::table('projects_db_dynamic_lists')->truncate();
                    
                    
                   DB::table('projects_db_querys')->truncate();
                    
                    
                   DB::table('projects_descriptions')->truncate();
                    
                    
                   DB::table('projects_modules')->truncate();
                    
                    
                   DB::table('projects_sections')->truncate();
                    
                    
                   DB::table('type_of_destination')->truncate();
                    
                    
                   DB::table('type_of_fields')->truncate();
                    
                    
                   DB::table('type_of_objs')->truncate();
                    
                    
                   DB::table('users')->truncate();
                    
                    
                   DB::table('users_profiles')->truncate();
                    
                    
                   DB::table('users_projects_descriptions')->truncate();
                    
                    
                   DB::table('user_profile_basics')->truncate();
                    
                    
                   DB::table('user_profile_photos')->truncate();
                    
/*
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_managements' => 1 ,
                   'id_projects' => 1 ,
                   'nb_department' => 1 ,
                   'nb_acronym' => 1 ,
                   'in_activerecord' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'nb_variable' => 1 ,
                   'nb_value' => 1 ,
                   'id_languages' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'connection' => 1 ,
                   'queue' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'in_activerecord' => 1 ,
                   'nb_activerecord' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'nb_languages' => 1 ,
                   'nb_acronym' => 1 ,
                   'in_activerecord' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_projects' => 1 ,
                   'nb_management' => 1 ,
                   'nb_acronym' => 1 ,
                   'in_activerecord' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'migration' => 1 ,
                   'batch' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_projects' => 1 ,
                   'id_projects_modules' => 1 ,
                   'id_projects_sections' => 1 ,
                   'nb_parameter' => 1 ,
                   'tx_value' => 1 ,
                   'in_activerecord' => 1 ,
                   'tx_description' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_projects' => 1 ,
                   'id_projects_modules' => 1 ,
                   'id_projects_sections' => 1 ,
                   'nb_parameter' => 1 ,
                   'tx_value' => 1 ,
                   'tx_description' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_projects' => 1 ,
                   'id_projects_modules' => 1 ,
                   'id_projects_sections' => 1 ,
                   'nb_parameter' => 1 ,
                   'tx_value' => 1 ,
                   'id_users' => 1 ,
                   'tx_description' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'email' => 1 ,
                   'token' => 1 ,
                   'created_at' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'nb_profile' => 1 ,
                   'tx_description' => 1 ,
                   'in_activerecord' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_profiles' => 1 ,
                   'id_departments' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_profiles' => 1 ,
                   'id_descriptions_objects' => 1 ,
                   'in_activerecord' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'nb_project' => 1 ,
                   'nb_description' => 1 ,
                   'nb_acronym' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_projects' => 1 ,
                   'id_projects_modules' => 1 ,
                   'id_projects_sections' => 1 ,
                   'nb_databases' => 1 ,
                   'nb_acronym' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_projects_databases' => 1 ,
                   'id_projects' => 1 ,
                   'nb_cruds' => 1 ,
                   'nb_owner' => 1 ,
                   'nb_tabla' => 1 ,
                   'nb_campo' => 1 ,
                   'id_type_of_fields' => 1 ,
                   'tx_tipo_de_llenado' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_projects_databases' => 1 ,
                   'id_projects' => 1 ,
                   'nb_lists' => 1 ,
                   'co_lists' => 1 ,
                   'nb_descripcion' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_projects_databases' => 1 ,
                   'id_projects' => 1 ,
                   'in_activerecord' => 1 ,
                   'tx_description' => 1 ,
                   'tx_sql' => 1 ,
                   'in_ejecuted' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_projects_modules' => 1 ,
                   'id_projects_sections' => 1 ,
                   'id_type_of_objs' => 1 ,
                   'id_projects' => 1 ,
                   'id_destination' => 1 ,
                   'id_type_of_destination' => 1 ,
                   'nu_order' => 1 ,
                   'nu_order1' => 1 ,
                   'nu_order2' => 1 ,
                   'tx_fir_option' => 1 ,
                   'tx_sec_option' => 1 ,
                   'tx_thi_option' => 1 ,
                   'tx_description' => 1 ,
                   'tx_icon' => 1 ,
                   'tx_destination' => 1 ,
                   'nb_parameter' => 1 ,
                   'tx_value_parameter' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_projects' => 1 ,
                   'nb_module' => 1 ,
                   'in_activerecord' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_projects' => 1 ,
                   'nb_sections' => 1 ,
                   'in_activerecord' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'nb_type_of_destination' => 1 ,
                   'nb_acronym' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'nb_type_of_fields' => 1 ,
                   'nb_acronym' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'nb_type_of_objs' => 1 ,
                   'nb_acronym' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'login' => 1 ,
                   'name' => 1 ,
                   'email' => 1 ,
                   'password' => 1 ,
                   'remember_token' => 1 ,
                   'in_verified' => 1 ,
                   'in_firstime' => 1 ,
                   'email_verified_at' => 1 ,
                   'in_activerecord' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_users' => 1 ,
                   'id_profiles' => 1 ,
                   'fe_vencimiento' => 1 ,
                   'in_activerecord' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_users' => 1 ,
                   'id_projects_descriptions' => 1 ,
                   'fe_vencimiento' => 1 ,
                   'in_activerecord' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'id_users' => 1 
                   ]);
                    
                    
                   DB::table('user_profile_photos')->insert([
                   'id' => 1 ,
                   'created_at' => 1 ,
                   'updated_at' => 1 ,
                   'tx_photofile' => 1 ,
                   'id_users' => 1 
                   ]);
                    
*/
       DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); 

    }
}
