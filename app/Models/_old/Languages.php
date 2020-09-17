<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    protected $table = 'languages';
    protected $fillable = ['id','created_at','updated_at','nb_languages','nb_acronym','in_activerecord'];
 
public function dictionary_words()
{
    return $this->belongsTo('App\Models\Dictionary_words', 'foreign_key');
}
 
}

