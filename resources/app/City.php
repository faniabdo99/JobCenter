<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model{
    protected $guarded = [];
    public function Job(){
      return $this->hasMany(Job::class , 'city_id');
    }
    public function getNameAttribute(){
      if(app()->getLocale() == 'en'){
        return $this->name_en;
      }else{
        return $this->name_ar;
      }
    }
}
