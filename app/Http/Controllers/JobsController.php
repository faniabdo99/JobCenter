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
            'description' => 'required|min:40|max:100',
            'position' => 'required',
            'city_id' => 'required'
        ];
        $ErrorMessages = [
            'category_id.required' => __('BackEnd.CategoryRequired'),
            'title.required' => __('BackEnd.JobTitleRequired'),
            'type.required' => __('BackEnd.TypeRequired'),
            'salary.integer' => __('BackEnd.SalaryNumber'),
            'description.min' => __('BackEnd.JobDescriptionShort'),
            'description.max' => __('BackEnd.JobDescriptionLong'),
            'city_id.required' => __('BackEnd.JobLocationRequired'),
            'position.required' => __('BackEnd.PositionRequired')
        ];
        $Validator = Validator::make($r->all() , $Rules , $ErrorMessages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all())->withInput();
        }else{
            //Make The Job
            if(auth()->user()->active !== '1'){
                return back()->withErrors(__('BackEnd.AccountNotActivated'));
            }else{
                $JobData = $r->except('_token');
                $JobData['company_id'] = auth()->user()->id;
                $Job = Job::create($JobData);
                return back()->withSuccess(__('BackEnd.JobCreated'));
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
        return back()->withSuccess(__('BackEnd.JobDeleted'));
      }else{
        return back()->withErrors(__('BackEnd.CantDeleteJob'));
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
        return back()->withErrors(__('BackEnd.CantEditJob'));
      }
    }
    public function postEdit(Request $r , $job_id){
      //Get Validation Ready
      $Rules = [
          'category_id' => 'required',
          'title' => 'required',
          'type' => 'required',
          'salary' => 'nullable|regex:/^(?=.*[0-9])[- +()0-9]+$/',
          'description' => 'required|min:40|max:100',
          'position' => 'required',
          'city_id' => 'required'
      ];
      $ErrorMessages = [
        'category_id.required' => __('BackEnd.CategoryRequired'),
        'title.required' => __('BackEnd.JobTitleRequired'),
        'type.required' => __('BackEnd.TypeRequired'),
        'salary.integer' => __('BackEnd.SalaryNumber'),
        'description.min' => __('BackEnd.JobDescriptionShort'),
        'description.max' => __('BackEnd.JobDescriptionLong'),
        'city_id.required' => __('BackEnd.JobLocationRequired'),
        'position.required' => __('BackEnd.PositionRequired')
      ];
      $Validator = Validator::make($r->all() , $Rules , $ErrorMessages);
      if($Validator->fails()){
          return back()->withErrors($Validator->errors()->all())->withInput();
      }else{
          //Make The Job
          if(auth()->user()->active !== '1'){
              return back()->withErrors(__('BackEnd.AccountNotActivated'));
          }else{
              $JobData = $r->except('_token');
              $JobData['company_id'] = auth()->user()->id;
              $Job = Job::findOrFail($job_id);
              $Job->update($JobData);
              return redirect()->route('dash.company.jobs')->withSuccess(__('BackEnd.JobUpdated'));
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
