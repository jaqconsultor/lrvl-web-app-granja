<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trace_xe_action_map extends Model
{
    protected $table = 'trace_xe_action_map';
    protected $fillable = ['trace_column_id','package_name','xe_action_name'];
 
}

