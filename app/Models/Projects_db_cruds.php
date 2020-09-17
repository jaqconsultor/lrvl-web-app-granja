<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects_db_cruds extends Model
{
    protected $table = 'projects_db_cruds';
    protected $fillable = ['id','created_at','updated_at','id_projects_databases','id_projects','nb_cruds','nb_owner','nb_tabla','nb_campo','id_type_of_fields','tx_tipo_de_llenado'];
 
}

