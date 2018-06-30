<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstitutionsModel extends Model
{
    protected $table = 'institutions';
    protected $primaryKey = 'org_name';

  protected $fillable =[
    	'user_id',
        'org_name',
        'contact',
        'email',
        'adress',
        'i_status',
    ];

    public function CertificateModel(){
    return $this->hasMany('App\Models\CertificateModel');
    }

}


