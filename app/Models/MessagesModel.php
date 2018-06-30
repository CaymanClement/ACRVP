<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessagesModel extends Model
{
      protected $table = 'messages';

  protected $fillable =[
        'user_id',
        'sender',
        'subject',
        'content',
        'status',
    ];


    public function User(){
    return $this->belongsTo('App\User','user_id');
    }
}
