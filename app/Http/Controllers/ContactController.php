<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Mail;
use App\Mail\ContactMail;
use App\Mail\QuickContact;
class ContactController extends Controller{
    public function getContactView(){
        return view('main.contact');
    }
    public function ProccessContact(Request $r){
        $Rules = [
            'full_name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ];
        $ErrorsMessages = [
            'full_name.required' => __('BackEnd.NameRequired'),
            'email.required' => __('BackEnd.EmailRequired'),
            'email.email' => __('BackEnd.EmailInvalid'),
            'message.required' => __('BackEnd.MessageRequired')
        ];
        $Validator = Validator::make($r->all() , $Rules , $ErrorsMessages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all())->withInput();
        }else{
            Mail::to('womenjobcenter@gmail.com')->send(new ContactMail($r->except('_token')));
            return back()->withSuccess(__('BackEnd.MessageSent'));
        }
    }
    public function quickContact(Request $r){
      $Rules = [
          'title' => 'required',
          'name' => 'required',
          'email' => 'required|email',
      ];
      $ErrorsMessages = [
          'title.required' => __('BackEnd.MessageTitleRequired'),
          'name.required' =>  __('BackEnd.NameRequired'),
          'email.required' => __('BackEnd.EmailRequired'),
          'email.email' => __('BackEnd.EmailInvalid'),
      ];
      $Validator = Validator::make($r->all() , $Rules , $ErrorsMessages);
      if($Validator->fails()){
          return back()->withErrors($Validator->errors()->all())->withInput();
      }else{
          Mail::to('womenjobcenter@gmail.com')->send(new QuickContact($r->except('_token')));
          return back()->withSuccess(__('BackEnd.MessageSent'));
      }
    }
}
