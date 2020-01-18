<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable{
    use Notifiable;
    protected $guarded = [];
    public function getProfileImageAttribute(){
        if($this->signup_method == 'signup'){
            return url('storage/app/public/users/')."/".$this->image;
        }else{
            return $this->image;
        }
    }
    public function getCvAttribute(){
        return url('storage/app/public/resumes/')."/".$this->resume;
    }
    public function DashLink(){
        if($this->type == 'user'){
            return route('dash.user.home');
        }else{
            return route('dash.company.home');
        }
    }
}
