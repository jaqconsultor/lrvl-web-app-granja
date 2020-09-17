<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects_descriptions extends Model
{
    protected $table = 'projects_descriptions';
    protected $fillable = ['id','created_at','updated_at','id_projects_modules','id_projects_sections','id_type_of_objs','id_projects','id_destination','id_type_of_destination','nu_order','nu_order1','nu_order2','tx_fir_option','tx_sec_option','tx_thi_option','tx_description','tx_icon','tx_destination','nb_parameter','tx_value_parameter'];
 
}

