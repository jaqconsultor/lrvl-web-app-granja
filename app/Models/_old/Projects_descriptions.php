<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects_descriptions extends Model
{
    protected $table = 'projects_descriptions';
    protected $fillable = ['id','created_at','updated_at','id_projects_modules','id_projects_sections','id_type_of_objs','id_projects','id_destination','id_type_of_destination','nu_order','nu_order1','nu_order2','tx_fir_option','tx_sec_option','tx_thi_option','tx_description','tx_icon','tx_destination','nb_parameter','tx_value_parameter'];
 
public function users_projects_descriptions()
{
    return $this->belongsTo('App\Models\Users_projects_descriptions', 'foreign_key');
}
 
public function type_of_objs()
{
    return $this->hasOne('App\Models\Type_of_objs', 'foreign_key');
}
 
public function type_of_destination()
{
    return $this->hasOne('App\Models\Type_of_destination', 'foreign_key');
}
 
public function projects_sections()
{
    return $this->hasOne('App\Models\Projects_sections', 'foreign_key');
}
 
public function projects_modules()
{
    return $this->hasOne('App\Models\Projects_modules', 'foreign_key');
}
 
public function projects()
{
    return $this->hasOne('App\Models\Projects', 'foreign_key');
}
 
public function profiles_projects_descriptions()
{
    return $this->belongsTo('App\Models\Profiles_projects_descriptions', 'foreign_key');
}
 
}

