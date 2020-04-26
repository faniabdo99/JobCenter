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
    public function getSlugAttribute(){
      return strtolower(str_replace(' ' , '-' , $this->title));
    }
    public function getJobTypeAttribute(){
      if($this->type == 'Full Time'){$JobType = __('layout/parts.FullTime');}
      if($this->type == 'Part Time'){$JobType = __('layout/parts.PartTime');}
      if($this->type == 'Rotation'){$JobType = __('layout/parts.Rotation');}
      if($this->type == 'Temporary'){$JobType = __('layout/parts.Temporary');}
      return $JobType;
    }
    public function getExpAttribute(){
      if($this->experience == 'Fresher'){$Exp = __('dash/company.Fresher');}
      if($this->experience == 'Junior'){$Exp = __('dash/company.Junior');}
      if($this->experience == 'Pre Senior'){$Exp = __('dash/company.PreSenior');}
      if($this->experience == 'Seniory'){$Exp = __('dash/company.Senior');}
      return $Exp;
    }
    public function Applications(){
      return $this->hasMany(Application::class , 'job_id');
    }
}
