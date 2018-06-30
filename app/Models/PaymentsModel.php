<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentsModel extends Model
{
  protected $table = 'payments';
  protected $primaryKey = 'p_id';
  protected $fillable =[
    	'amount',
        'status',
        'filename',
    ];


    public function User(){
    return $this->belongsTo('App\User');
    }
}
