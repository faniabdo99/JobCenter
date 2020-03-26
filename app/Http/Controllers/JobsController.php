<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Application;
use App\Like;
use App\Category;
use App\City;
class JobsController extends Controller{
    private function getUser(){
        if(auth()->check()){
            $User = User::where('id' , auth()->user()->id)->where('type' , 'company')->first();
            return $User;
        }else{
            return null;
        }
    }
    public function getNew(){
        $User = $this->getUser();
        if($User->active == 0){
          abort(403);
        }else{
          $Categories = Category::orderBy('id' , 'desc')->get();
          $Cities = City::orderBy('id' , 'desc')->get();
          return view('dash.company.new-job' , compact('User','Categories','Cities'));
        }
    }
    public function postNew(Request $r){
        //Get Validation Ready
        $Rules = [
            'category_id' => 'required',
            'title' => 'required',
            'type' => 'required',
            'salary' => 'nullable|integer',
            'experience' => 'required',
            'description' => 'required|min:40',
            'position' => 'required',
            'city_id' => 'required'
        ];
        $ErrorMessages = [
            'category_id.required' => 'You must choose a category',
            'title.required' => 'You must provide a job title',
            'type.required' => 'You must choose a type',
            'salary.integer' => 'The salary must be in form of number',
            'experience.required' => 'The experience can not be blank',
            'description.min' => 'The job description must be 40 charachters at least',
            'city_id.required' => 'You must choose a job location',
            'position.required' => 'You Must Add Job Position'
        ];
        $Validator = Validator::make($r->all() , $Rules , $ErrorMessages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all())->withInput();
        }else{
            //Make The Job
            if(auth()->user()->active !== '1'){
                return back()->withErrors('Your Account is not yet activated');
            }else{
                $JobData = $r->except('_token');
                $JobData['company_id'] = auth()->user()->id;
                $Job = Job::create($JobData);
                return back()->withSuccess('Job Has Been Created!');
            }
        }
    }
    public function DeleteJob($job_id){
      $User = $this->getUser();
      if(auth()->user()->id == $User->id){
        //Grab the Job
        $Job = Job::findOrFail($job_id);
        //Get All The Job Applications
        Application::where('job_id' , $Job->id)->delete();
        Like::where('item_type' , 'job')->where('item_id' , $Job->id)->delete();
        $Job->delete();
        return back()->withSuccess('Job Deleted Successfully');
      }else{
        return back()->withErrors('You Can\'t Delete This Job !');
      }
    }
    public function getEdit($job_id){
      $User = $this->getUser();
      if(auth()->user()->id == $User->id){
        $Job = Job::findOrFail($job_id);
        $Categories = Category::all();
        $Cities = City::all();
        return view('dash.company.edit-job' , compact('User' , 'Job' , 'Categories' , 'Cities'));
      }else{
        return back()->withErrors('You Can\'t Edit This Job !');
      }
    }
    public function postEdit(Request $r , $job_id){
      //Get Validation Ready
      $Rules = [
          'category_id' => 'required',
          'title' => 'required',
          'type' => 'required',
          'salary' => 'nullable|regex:/^(?=.*[0-9])[- +()0-9]+$/',
          'description' => 'required|min:40',
          'position' => 'required',
          'city_id' => 'required'
      ];
      $ErrorMessages = [
          'category_id.required' => 'You must choose a category',
          'title.required' => 'You must provide a job title',
          'type.required' => 'You must choose a type',
          'salary.regex' => 'The salary must be in form of number and dashes only',
          'description.min' => 'The job description must be 40 charachters at least',
          'city_id.required' => 'You must choose a job location',
          'position.required' => 'You Must Add Job Position'
      ];
      $Validator = Validator::make($r->all() , $Rules , $ErrorMessages);
      if($Validator->fails()){
          return back()->withErrors($Validator->errors()->all())->withInput();
      }else{
          //Make The Job
          if(auth()->user()->active !== '1'){
              return back()->withErrors('Your Account is not yet activated');
          }else{
              $JobData = $r->except('_token');
              $JobData['company_id'] = auth()->user()->id;
              $Job = Job::findOrFail($job_id);
              $Job->update($JobData);
              return back()->withSuccess('Job Has Been Updated!');
          }
      }
    }
    //Get All Jobs Page
    public function getAll(){
        $User = $this->getUser();
        $Jobs = Job::where('company_id' , $User->id)->get();
        return view('dash.company.jobs' , compact('User' , 'Jobs'));
    }
    //Single Job Page
    public function getSingle($id , $slug = null){
        $Job = Job::findOrFail($id);
        $RealtedJobs1 = Job::where('category_id' , $Job->category_id)->where('id' , '!=' , $Job->id)->orderBy('id','desc')->skip(0)->take(3)->get();
        $RealtedJobs2 = Job::where('category_id' , $Job->category_id)->where('id' , '!=' , $Job->id)->orderBy('id','desc')->skip(3)->take(3)->get();
        return view('main.job' , compact('Job','RealtedJobs1' , 'RealtedJobs2'));
    }
}
