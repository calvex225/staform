<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupeElectrogene extends Model
{
    public function site(){
        return $this->belongsTo('App\Site', 'id_site');
    }
}
