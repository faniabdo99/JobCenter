<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model{
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
