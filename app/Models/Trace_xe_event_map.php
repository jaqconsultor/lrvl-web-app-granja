<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trace_xe_event_map extends Model
{
    protected $table = 'trace_xe_event_map';
    protected $fillable = ['trace_event_id','package_name','xe_event_name'];
 
}

