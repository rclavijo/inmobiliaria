<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    const ROOT = 'root';
    const ADMIN = 'admin';
    const SELLER_PERSON = 'seller_person';
    const SELLER_COMPANY = 'seller_company';
    
    const PERSON = 'person';
    const COMPANY = 'company';
    
    const ENABLE = 1;
    const DISABLE = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password','phone','rol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function person()
    {
        return $this->hasOne('App\Person');
    }
    public function company()
    {
        return $this->hasOne('App\Company');
    }

}
