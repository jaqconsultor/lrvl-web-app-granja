<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projectsdescriptions extends Model
{
    protected $table = 'projectsdescriptions';

               protected $fillable = [
	`id`,	`created_at` , 	`updated_at`, `id_module`, 	`id_typeofobjs`, `nu_order`, `id_destination`, `tx_fir_option` , `tx_sec_option`, `tx_thi_option`, 	`tx_description`, `tx_icon` 
    ];
 

}

