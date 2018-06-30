<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
      protected $fillable =[
    	'user_id' 
    	'heading',
        'post_content',
    ];


    public function User(){
    return $this->belongsTo('App\User','user_id');
    }
}
