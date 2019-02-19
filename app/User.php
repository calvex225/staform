<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'email', 'password', 'matricule', 'profil', 'service', 'entreprise', 'role', 'phone', 'adresse', 'picture',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function maintenance(){
        return $this -> hasMany('App\Maintenance');
    }
    public function tache(){
        return $this -> hasMany('App\Tache');
    }
    public function rapport(){
        return $this -> hasMany('App\Rapport');
    }
}
