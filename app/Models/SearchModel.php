<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SearchModel extends Model
{
     protected $table = 'search_records';

  protected $fillable =[
    	 'user_id',
       'cert_id',
        'comment',
        'reg_no',
        'cert_type',
        'institution',
        'year',
    ];

     public function User(){
    return $this->belongsTo('App\User','user_id');
    }
}
