<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model{
    protected $guarded = [];
    public function getTitleAttribute(){
      return $this->title_en;
    }
    public function Posts(){
      return $this->hasMany(Post::class);
    }
}
