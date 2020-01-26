<?php

namespace App\Http\Controllers;
use App\Application;
use Illuminate\Http\Request;
use Validator;

//Models
use App\User;
use App\Category;
use App\City;
class CompanyDashController extends Controller{
    private function getUser(){
        if(auth()->check()){
            return User::where('id' , auth()->user()->id)->where('type' , 'company')->first();
        }else{
            return null;
        }
    }
    public function getHome(){
        $User = $this->getUser();
        return view('dash.company.index' , compact('User'));
    }
    public function getEdit(){
        $User = $this->getUser();
        $Categories = Category::all();
        $Cities = City::all();
        return view('dash.company.edit' , compact('User' , 'Categories' , 'Cities'));
    }
    public function postEdit(Request $r){
        $TheUser = $this->getUser();
        //Some Validation Rules
        $Rules = [
            'name' => 'required',
            'image' => 'nullable|image',
            'cover' => 'nullable|image',
            'resume' => 'nullable|mimes:doc,pdf,docx,zip',
            'google' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url'
        ];
        $ErrorMessages = [
            'name.required' => 'Your Name is Required',
            'image.image' => 'This Profile Image File is Invalid',
            'cover.image' => 'This Cover Image File is Invalid',
            'resume.mimes' => 'Only PDF , DOC And DOCX Are Allowed as Your Resume',
            'google.url' => 'This Google URL is Invalid',
            'facebook.url' => 'This Facebook URL is Invalid',
            'twitter.url' => 'This Twitter URL is Invalid',
            'linkedin.url' => 'This LinkedIn URL is Invalid',
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
                //Update Image (Yes)
                $image = $TheUser->id.'.'.$r->image->getClientOriginalExtension();
                $r->image->storeAs('public/users', $image); //Image Uploaded !
                $UpdateData['image'] = $image;
            }else{
                $UpdateData['image'] = $TheUser->image;
            }
            if($r->has('cover')){ //Dose The Request Has Image ?
                //Update Image
                $cover = $TheUser->id.'.'.$r->cover->getClientOriginalExtension();
                $r->cover->storeAs('public/covers', $cover); //Image Uploaded !
                $UpdateData['cover'] = $cover;
            }else{
                $UpdateData['cover'] = $TheUser->cover;
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
                    $UpdateData = Hash::make($r->n_password);
                }else{
                    $CurrentPasswordIsWrong = true;
                    $UpdateData['password'] = $TheUser->password;
                }
            }
            if($CurrentPasswordIsWrong){
                $TheUser->update($UpdateData);
                return back()->withErrors('Your Current Password is Wrong! Every Thing Else Updated');
            }else{
                $TheUser->update($UpdateData);
                return back()->withSuccess('Your Profile is Updated !');
            }
        }
    }
    public function getApplications(){
      $User = $this->getUser();
      return view('dash.company.applications' , compact('User'));
    }
}
