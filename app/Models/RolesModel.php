<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolesModel extends Model
{
    
    public function User(){
    return $this->hasOne('App\User','id');
    }
}
