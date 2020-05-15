<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Str;
class Comment extends Model{
    protected $guarded = [];
    public function User(){
      return $this->belongsTo(User::class)->withDefault([
        'name' => 'Deleted User'
      ]);
    }
    public function Post(){
      return $this->belongsTo(Post::class)->withDefault([
        'title' => 'Deleted Post',
        'slug' => 'deleted-post'
      ]);
    }

    public function getSnippetAttribute(){
      return Str::limit($this->description , '60');
    }
}
