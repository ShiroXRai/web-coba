<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
   use SoftDeletes;
   protected $fillable=['user_id','nama','nrp','email','jurusan','avatar'];

   public function getAvatar()
   {
      if(!$this->avatar){
         return asset('images/default.jpg');
      }
      return asset('images/'.$this->avatar);
   }
   
   public function user()
   {
      return $this->belongsto(User::class);
   }
   
   
}
