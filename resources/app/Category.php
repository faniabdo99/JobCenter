<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    protected $guarded = [];
    public function Jobs(){
        return $this->hasMany(Job::class , 'category_id');
    }
    public function getTitleAttribute(){
      if(app()->getLocale() == 'en'){
        return $this->title_en;
      }else{
        return $this->title_ar;
      }
    }
}
