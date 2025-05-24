<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class apprentice extends Model
{
     public function computer(){
        return $this->belongsTo('App\Models\computer');

    } public function course(){
        return $this->belongsTo('App\Models\course');
    }
}
