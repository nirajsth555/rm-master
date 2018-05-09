<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newstable extends Model
{
    //
     protected $table='newstables';
     protected $fillable=['english_title','nepali_title','category','nepali_description','english_description'];

     public function ormCategory(){
     	return $this->belongsTo('App\categorytable','category');
     }
}
