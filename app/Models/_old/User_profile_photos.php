<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_profile_photos extends Model
{
    protected $table = 'user_profile_photos';
    protected $fillable = ['id','created_at','updated_at','tx_photofile','id_users'];
 
public function users()
{
    return $this->hasOne('App\Models\Users', 'foreign_key');
}
 
}

