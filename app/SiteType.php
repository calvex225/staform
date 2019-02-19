<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteType extends Model
{
    public function site(){
        return $this -> hasMany('App\Site');
    }
}
