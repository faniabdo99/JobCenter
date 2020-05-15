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
          if(strlen($this->image) > 25 ){
            return $this->image;
          }else{
            return url('storage/app/public/users/')."/".$this->image;
          }
        }
    }
    public function getSlugAttribute(){
      return strtolower(str_replace(' ' , '-' , $this->name));
    }
    public function getProfileAttribute(){
      return url('storage/app/public/profile_pdf/')."/".$this->profile_pdf;
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
        return $this->belongsTo(Category::class , 'category_id')->withDefault([
          'title_ar' => 'لا يوجد قسم',
          'title_en' => 'No Category Selected'
        ]);
    }
    public function Jobs(){
        if($this->type == 'company'){
            return $this->hasMany(Job::class , 'company_id');
        }else{
            return null;
        }
    }
    public function City(){
        return $this->belongsTo(City::class , 'city_id')->withDefault([
          'name_ar' => 'لا يوجد مدينة',
          'name_en' => 'No City Selected'
        ]);
    }
    public function Attachments(){
      return $this->hasMany(CompanyAttachment::class , 'company_id');
    }
    public function Application(){
      if($this->type == 'user'){
        return $this->hasMany(Application::class , 'user_id');
      }elseif($this->type == 'company'){
        $Applications = Application::where('company_id' , $this->id)->where('is_active' , 1)->get();
        return $Applications;
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
        return Application::where('company_id' , $this->id)->where('is_active' , 1)->orderBy('id' , 'desc')->limit(3)->get();
      }else{
        return null;
      }
    }
}
