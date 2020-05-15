<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Str;
class Comment extends Model{
    protected $guarded = [];
    public function User(){
      return $this->belongsTo(User::class)->withDefault([
          'id' => 0,
          'name' => 'Deleted User',
          'email' => 'no@email.com',
          'contact_email' => 'no@email.com',
          'image' => 'profile.png',
          'username' => 'no_one_here',
          'cover' => 'cover.png',
          'phone' => '0000-000-00'
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
