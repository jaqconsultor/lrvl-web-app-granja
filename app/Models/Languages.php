<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    protected $table = 'languages';
    protected $fillable = ['id','created_at','updated_at','nb_languages','nb_acronym','in_activerecord'];
 
}

