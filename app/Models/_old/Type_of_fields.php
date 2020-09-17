<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type_of_fields extends Model
{
    protected $table = 'type_of_fields';
    protected $fillable = ['id','created_at','updated_at','nb_type_of_fields','nb_acronym'];
 
public function projects_db_cruds()
{
    return $this->belongsTo('App\Models\Projects_db_cruds', 'foreign_key');
}
 
}

