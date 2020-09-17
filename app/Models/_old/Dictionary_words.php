<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dictionary_words extends Model
{
    protected $table = 'dictionary_words';
    protected $fillable = ['id','created_at','updated_at','nb_variable','nb_value','id_languages'];
 
public function languages()
{
    return $this->hasOne('App\Models\Languages', 'foreign_key');
}
 
}

