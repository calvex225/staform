<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function maintenance(){
        return $this->belongsTo('App\Maintenance');
    }
}
