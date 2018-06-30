<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
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
        'first_name',
        'mid_name', 
        'last_name', 
        'email',
        'phone',
        'gender',
        'identity',
        'organization',
        'status',
        'role_id', 
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function CertificateModel(){
    return $this->hasMany('App\Models\CertificateModel');
    }

    public function RolesModel(){
    return $this->hasOne('App\Models\RolesModel','role_id');
    }

    public function MessagesModel(){
    return $this->hasOne('App\Models\MessagesModel');
    }

    public function AnnouncementModel(){
    return $this->hasMany('App\Models\AnnouncementModel');
    }

    public function SearchModel(){
    return $this->hasMany('App\Models\SearchModel');
    }

    public function PostModel(){
    return $this->hasMany('App\Models\PostModel');
    }

}
