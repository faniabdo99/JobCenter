<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
    protected $guarded = [];
    public function User(){
      return $this->belongsTo(User::class);
    }
    public function Post(){
      return $this->belongsTo(Post::class);
    }
}
