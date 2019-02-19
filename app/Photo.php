<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function tache(){
        return $this->belongsTo('App\Tache', 'id_tache');
    }
}
