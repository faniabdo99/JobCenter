<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model{
    protected $guarded = [];
    public function User(){
      return $this->belongsTo(User::class)->withDefault([
        'name' => 'Deleted User'
      ]);
    }
    public function getPostImageAttribute(){
      return url('storage/app/public/blog')."/".$this->image;
    }
    public function Comments(){
      return $this->hasMany(Comment::class);
    }
    public function Category(){
      return $this->belongsTo(Section::class , 'section_id')->withDefault([
        'title_en' => 'Deleted Section',
        'title_en' => 'قسم محذوف',
      ]);
    }
}
