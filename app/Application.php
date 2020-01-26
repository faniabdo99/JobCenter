<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model{
    protected $guarded = [];
    public function User(){
        return $this->belongsTo(User::class , 'user_id');
    }
    public function Job(){
        return $this->belongsTo(Job::class , 'job_id');
    }
    public function getResumeLinkAttribute(){
      return url('storage/app/public/applications/resumes').'/'.$this->resume;
    }
}
