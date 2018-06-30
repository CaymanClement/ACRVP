<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnouncementModel extends Model
{
     protected $table = 'announcements';
     protected $primaryKey = 'id';

  protected $fillable =[
    	  'title',
        'contents', 
        'user_id',
    ];


    public function User(){
    return $this->belongsTo('App\User','user_id');
    }
}
