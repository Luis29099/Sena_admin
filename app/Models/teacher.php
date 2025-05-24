<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    public function courses(){
        return $this->belongsToMany('App\Models\course');
    }
    public function area(){
        return $this->belongsTo('App\Models\area');
    }
    public function training_center(){
        return $this->belongsTo('App\Models\training_center');
    }
}
