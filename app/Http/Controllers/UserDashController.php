<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Hash;
//Models
use App\User;
use App\Application;
use App\Like;
use App\Category;
use App\City;
class UserDashController extends Controller{
    private function getUser(){
        if(auth()->check()){
            $User = User::where('id' , auth()->user()->id)->where('type' , 'user')->first();
            return $User;
        }else{
            return null;
        }
    }
    public function getHome(){
        $User = $this->getUser();
        return view('dash.user.index' , compact('User'));
    }
    public function getEdit(){
        $User = $this->getUser();
        $Categories = Category::latest()->get();
        $Cities = City::latest()->get();
        return view('dash.user.edit' , compact('User','Categories','Cities'));
    }
    public function postEdit(Request $r){
        $TheUser = $this->getUser();
        //Some Validation Rules
        $Rules = [
            'name' => 'required',
            'image' => 'nullable|image',
            'resume' => 'nullable|mimes:pdf',
            'google' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url'
        ];
        $ErrorMessages = [
            'name.required' =>  __('BackEnd.NameRequired'),
            'image.image' =>__('BackEnd.ProfileImageFileError'),
            'resume.mimes' => __('BackEnd.ResumeFileTypeError'),
            'google.url' =>__('BackEnd.InstagramLinkInvalid'),
            'facebook.url' => __('BackEnd.FacebookLinkInvalid'),
            'twitter.url' =>  __('BackEnd.TwitterLinkInvalid'),
            'linkedin.url' => __('BackEnd.LinkedInLinkInvalid')
        ];
        $Validator = Validator::make($r->all() , $Rules , $ErrorMessages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all())->withInput();
        }else{
            //Prepare Data
            $CurrentPasswordIsWrong = false;
            $UpdateData = $r->except(['_token' , 'c_password' , 'n_password']);
            $UpdateData['username'] = strtolower(str_replace(' ' , '_' , $r->name));
            if($r->has('image')){ //Dose The Request Has Image ?
                //Update Image
                $image = $TheUser->id.'.'.$r->image->getClientOriginalExtension();
                $r->image->storeAs('public/users', $image); //Image Uploaded !
                $UpdateData['image'] = $image;
            }else{
                $UpdateData['image'] = $TheUser->image;
            }
            if($r->has('resume')){ //Dose The Request Has resumes ?
                //Update resumes
                $resume = $TheUser->id.'.'.$r->resume->getClientOriginalExtension();
                $r->resume->storeAs('public/resumes', $resume); //resumes Uploaded !
                $UpdateData['resume'] = $resume;
            }else{
                $UpdateData['resume'] = $TheUser->resume;
            }
            if($r->n_password !== null){ //If the user want to change the password
                if(Hash::check($r->c_password, $TheUser->password)){
                    $UpdateData['password'] = Hash::make($r->n_password);
                }else{
                    $CurrentPasswordIsWrong = true;
                    $UpdateData['password'] = $TheUser->password;
                }
            }
            if($CurrentPasswordIsWrong){
                $TheUser->update($UpdateData);
                return back()->withErrors(__('BackEnd.CurrentPassError'));
            }else{
                $TheUser->update($UpdateData);
                return back()->withSuccess(__('BackEnd.ProfileUpdated'));
            }
        }
    }
    public function getResume(){
        $User = $this->getUser();
        return view('dash.user.resume' , compact('User'));
    }
    public function getApplications(){
        $User = $this->getUser();
        $Applications = Application::where('user_id' , $User->id)->where('is_active' , 1)->get();
        return view('dash.user.applications' , compact('User' , 'Applications'));
    }
    public function getAllLikes(){
      $User = $this->getUser();
      $LikedJobs = Like::where([
        ['item_type' , 'job'],
        ['user_id' , auth()->user()->id]
      ])->get();
      return view('dash.user.faves' , compact('LikedJobs' , 'User'));
    }
}
