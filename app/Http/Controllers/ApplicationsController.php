<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Helpers
use Validator;
use Mail;
//Models
use App\Application;
use App\Job;
//Mails
use App\Mail\NewApplicationNoto;
class ApplicationsController extends Controller{
    public function postApplication(Request $r , $job_id , $user_id){
        if(auth()->user()->active != 1){
            return redirect()->route('dash.user.home')->withErrors('Your Account is not yet activated!');
        }else{
            $Rules = [
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
                'resume' => 'nullable|mimes:doc,pdf,docx,zip|max:5200'
            ];
            $ErrorMessages = [
                'name.required' => 'Your Name is Required',
                'email.required' => 'Your Email is Required',
                'resume.mimies' => 'Only PDF and Word Documents are Allowed as Resume!',
                'resume.max' => 'Max Resume Size is 5MB'
            ];
            $Validator = Validator::make($r->all() , $Rules , $ErrorMessages);
            if($Validator->fails()){
                return back()->withErrors($Validator->errors()->all())->withInput();
            }else{
              $ApplicationData = $r->except(['_token','resume']);
              if($r->has('resume')){
                //Upload Resume to Server
                $resume = $user_id.'.'.$r->resume->getClientOriginalExtension();
                $r->resume->storeAs('public/applications/resumes', $resume); //resumes Uploaded !
                $ApplicationData['resume'] = $resume;
              }
                //Create The Application
                $ApplicationData['user_id'] = $user_id;
                $ApplicationData['job_id'] = $job_id;
                $TheJob = Job::findOrFail($job_id);
                $ApplicationData['company_id'] = $TheJob->company_id;
                $Application = Application::create($ApplicationData);
                Mail::to($Application->Job->Company->email)->send(new NewApplicationNoto($Application));
                return back()->withSuccess('Application Sent !');
            }
        }

    }
}
