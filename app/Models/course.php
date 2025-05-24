<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function apprentices(){
        return $this->hasMany('App\Models\apprentice');
    }
    public function area(){
        return $this->belongsTo('App\Models\area');
    }
    public function training_center(){
        return $this->belongsTo('App\Models\training_center');
    }
    public function teacher(){
        return $this->belongsToMany('App\Models\teacher');
    }
}
