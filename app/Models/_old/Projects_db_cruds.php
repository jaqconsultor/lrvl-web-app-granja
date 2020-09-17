<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects_db_cruds extends Model
{
    protected $table = 'projects_db_cruds';
    protected $fillable = ['id','created_at','updated_at','id_projects_databases','id_projects','nb_cruds','nb_owner','nb_tabla','nb_campo','id_type_of_fields','tx_tipo_de_llenado'];
 
public function projects()
{
    return $this->hasOne('App\Models\Projects', 'foreign_key');
}
 
public function projects_databases()
{
    return $this->hasOne('App\Models\Projects_databases', 'foreign_key');
}
 
public function type_of_fields()
{
    return $this->hasOne('App\Models\Type_of_fields', 'foreign_key');
}
 
}

