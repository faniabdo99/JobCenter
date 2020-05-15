<?php

namespace App\Http\Controllers;
use App\Application;
use App\CompanyAttachment;
use Illuminate\Http\Request;
use Validator;
use Storage;
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
            'linkedin' => 'nullable|url',
            'profile_pdf' => 'nullable|mimes:pdf'
        ];
        $ErrorMessages = [
            'name.required' => __('BackEnd.NameRequired'),
            'image.image' => __('BackEnd.ProfileImageFileError'),
            'cover.image' => __('BackEnd.CoverImageFileError') ,
            'resume.mimes' => __('BackEnd.ResumeFileTypeError'),
            'google.url' => __('BackEnd.InstagramLinkInvalid'),
            'facebook.url' =>  __('BackEnd.FacebookLinkInvalid'),
            'twitter.url' =>  __('BackEnd.TwitterLinkInvalid'),
            'linkedin.url' =>  __('BackEnd.LinkedInLinkInvalid'),
            'profile_pdf.mimes' => __('BackEnd.ProfilePDFfile')
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
            if($r->has('cover')){ //Dose The Request Has Cover ?
                //Update Image
                $cover = $TheUser->id.'.'.$r->cover->getClientOriginalExtension();
                $r->cover->storeAs('public/covers', $cover); //Image Uploaded !
                $UpdateData['cover'] = $cover;
            }else{
                $UpdateData['cover'] = $TheUser->cover;
            }
            if($r->has('profile_pdf')){ //Dose The Request Has resumes ?
                //Update resumes
                $ProfilPDF = $TheUser->id.'.'.$r->profile_pdf->getClientOriginalExtension();
                $r->profile_pdf->storeAs('public/profile_pdf', $ProfilPDF); //resumes Uploaded !
                $UpdateData['profile_pdf'] = $ProfilPDF;
            }else{
                $UpdateData['profile_pdf'] = $TheUser->profile_pdf;
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
                return back()->withErrors(__('BackEnd.CurrentPassError'));
            }else{
                $TheUser->update($UpdateData);
                return back()->withSuccess(__('BackEnd.ProfileUpdated'));
            }
        }
    }
    public function getApplications(){
      $User = $this->getUser();
      return view('dash.company.applications' , compact('User'));
    }
      public function StoreAttachments(Request $r , $id){
          //Update Image (Yes)
          $FileName = $r->file->getClientOriginalName();
          Storage::makeDirectory($id,0711, true, true);
          $r->file->storeAs('public/companies/files/'.$id, $FileName); //File Uploaded !
          //Update the database
          CompanyAttachment::create([
            'source' => $FileName,
            'company_id' => $id
          ]);
          return "Saved";
      }
      public function DeleteAttachments($id){
        if(auth()->check()){
          if(auth()->user()->id == $id){
            Storage::disk('local')->deleteDirectory('/public/companies/files/'.$id);
            CompanyAttachment::where('company_id' , $id)->delete();
            return back()->with('success' , __('BackEnd.AttachmentsDeleted'));
          }else{
            dd("Fuck Off");
          }
        }
      }
}
