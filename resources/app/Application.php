<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model{
    protected $guarded = [];
    public function User(){
        return $this->belongsTo(User::class , 'user_id')->withDefault([
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
    public function Job(){
        return $this->belongsTo(Job::class , 'job_id');
    }
    public function getResumeLinkAttribute(){
      return url('storage/app/public/applications/resumes').'/'.$this->resume;
    }
}
