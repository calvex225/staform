<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public function groupeelectrogene(){
        return $this->hasMany('App\GroupeElectrogene');
    }
    public function maintenance(){
        return $this->hasMany('App\Maintenance');
    }

    public function siteType(){
        return $this->belongsTo('App\SiteType', 'id_sitetype');
    }
}
