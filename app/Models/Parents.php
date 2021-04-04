<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Parents extends Authenticatable

{

    use Notifiable;
    // protected $guard = 'parent';

    protected $fillable = [
        'id', 'email', 'parent_name', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function getAuthPassword()
    {
        return $this->password;
    }



    /*
    */

    public function students()
    {
        return $this->hasMany('App\Models\Student', 'parent_id')->get();
    }
}
