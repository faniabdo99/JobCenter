<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    public function Jobs(){
        return $this->hasMany(Job::class , 'category_id');
    }
}
