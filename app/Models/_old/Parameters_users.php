<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parameters_users extends Model
{
    protected $table = 'parameters_users';
    protected $fillable = ['id','created_at','updated_at','id_projects','id_projects_modules','id_projects_sections','nb_parameter','tx_value','id_users','tx_description'];
 
public function users()
{
    return $this->hasOne('App\Models\Users', 'foreign_key');
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
 
}

