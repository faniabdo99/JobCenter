<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model{
    protected $guarded = [];
    public function Company(){
        return $this->belongsTo(User::class)->withDefault([
            'id' => 0,
            'name' => 'Deleted Company',
            'email' => 'no@email.com',
            'contact_email' => 'no@email.com',
            'image' => 'profile.png',
            'username' => 'no_one_here',
            'cover' => 'cover.png',
            'phone' => '0000-000-00'
        ]);
    }
    public function Category(){
        return $this->belongsTo(Category::class)->withDefault([
            'id' => 0,
            'title' => 'Deleted Category',
            'icon' => 'fa fa-book'
        ]);
    }
    public function City(){
        return $this->belongsTo(City::class);
    }
    public function Applications(){
      return $this->hasMany(Application::class , 'job_id');
    }
}
