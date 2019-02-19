<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'cree_par');
    }
    public function user2(){
        return $this->belongsTo('App\User', 'attribuee_a');
    }
    public function maintenance(){
        return $this->belongsTo('App\Maintenance');
    }

    public function photos(){
        return $this->hasMany('App\Photo', 'id_tache');
    }
}
