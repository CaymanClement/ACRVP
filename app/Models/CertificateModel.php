<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateModel extends Model
{
  
  protected $table = 'certificate';

  protected $fillable =[
    	'index_no',
        'f_name', 
        'm_name', 
        'l_name', 
        'uploader_id', 
        'certificate_id',
        'school',
        'type',
        'grade',
        'year_from',
        'year_to',
        'status',
        'filename',
    ];


    public function User(){
    return $this->belongsTo('App\User','owner_id');
    }
    public function InstitutionsModel(){
    return $this->belongsTo('App\Models\InstitutionsModel');
    }
}
