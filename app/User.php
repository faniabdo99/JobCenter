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
    public function getCoverImageAttribute(){
        if($this->type == 'company'){
            return url('storage/app/public/covers/')."/".$this->cover;
        }else{
            return null;
        }
    }
    public function getCvAttribute(){
        return url('storage/app/public/resumes/')."/".$this->resume;
    }
    public function DashLink($newRoute = null){
        if($this->type == 'user'){
            return route('dash.user.home').'/'.$newRoute;
        }else{
            return route('dash.company.home').'/'.$newRoute;
        }
    }
    //Only For Companies
    public function Category(){
        return $this->belongsTo(Category::class , 'category_id');
    }
    public function Jobs(){
        if($this->type == 'company'){
            return $this->hasMany(Job::class , 'company_id');
        }else{
            return null;
        }
    }
    public function City(){
        return $this->belongsTo(City::class , 'city_id');
    }
    public function Application(){
      if($this->type == 'user'){
        return $this->hasMany(Application::class , 'user_id');
      }elseif($this->type == 'company'){
        return $this->hasMany(Application::class , 'company_id');
      }else {
        return null;
      }
    }
    public function FavJobs(){
      return Like::where([
        ['item_type' , 'job'],
        ['user_id' , $this->id]
      ])->get();
    }
    public function LikesCount(){
      if($this->type == 'company'){
        return Like::where('item_type' , 'company')->where('item_id' , $this->id)->count();
      }else {
        return null;
      }
    }
    public function LatestApplications(){
      if($this->type == 'company'){
        return Application::where('company_id' , $this->id)->orderBy('id' , 'desc')->limit(3)->get();
      }else{
        return null;
      }
    }
}
