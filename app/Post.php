<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model{
    protected $guarded = [];
    public function User(){
      return $this->belongsTo(User::class);
    }
    public function getPostImageAttribute(){
      return url('storage/app/public/blog')."/".$this->image;
    }
    public function Comments(){
      return $this->hasMany(Comment::class);
    }
}
