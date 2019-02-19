<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function site(){
        return $this->belongsTo('App\Site', 'id_site');
    }

    public function taches(){
        return $this->hasMany('App\Tache');
    }
    public function rapports(){
        return $this->hasMany('App\Rapport');
    }
}
