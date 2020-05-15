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
                'phone' => 'required',
                'resume' => 'nullable|mimes:pdf|max:5200'
            ];
            $ErrorMessages = [
                'name.required' => 'Your Name is Required',
                'email.required' => 'Your Email is Required',
                'phone.required' => 'Your Number is Required',
                'resume.mimes' => 'Only PDF Allowed as Resume!',
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
                //Prepare Email Data
                $ApEmailData['CompanyName'] = $Application->Job->Company->name;
                $ApEmailData['JobTitle'] = $Application->Job->title;
                $ApEmailData['UserName'] = $Application->User->name;
                $ApEmailData['UserId'] = $Application->User->id;
                $ApEmailData['UserSlug'] = $Application->User->slug;
                $ApEmailData['Message'] = $Application->message;
                if($r->has('resume')){
                  Mail::send('mails.company.NewApplicationNoto', $ApEmailData, function($message) use ($Application,$resume){
                      $message->to($Application->Job->Company->email);
                      $message->subject('New Job Application');
                      $message->from('noreply@jobcenter.com');
                      $message->attach(url('storage/app/public/applications/resumes').'/'.$resume, array('as' => $resume,'mime' => 'application/pdf'));
                  });
                }else{
                  Mail::send('mails.company.NewApplicationNoto', $ApEmailData, function($message) use ($Application){
                      $message->to($Application->Job->Company->email);
                      $message->subject('New Job Application');
                      $message->from('noreply@jobcenter.com');
                  });
                }

                return back()->withSuccess('Application Sent !');
            }
        }

    }
    public function deleteApplication($id){
      $Application = Application::find($id);
      if($Application != null){
        if($Application->user_id == auth()->user()->id){
          $Application->is_active = 0;
          $Application->save();
          return back()->withSuccess('Application Deleted Successfully');
        }else{
          return back()->withErrors('You Can\'t Delete This Application');
        }
      }
    }
}
