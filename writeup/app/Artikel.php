<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable=['judul','gambar','isi'];
    public function getGambar()
   {
      if(!$this->gambar){
         return asset('images/default.jpg');
      }
      return asset('images/'.$this->gambar);
   }
}
