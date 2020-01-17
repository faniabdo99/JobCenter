<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Mail;
use App\Mail\ContactMail;
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
            'full_name.required' => 'Your Name is Required',
            'email.required' => 'Your Email is Required',
            'email.email' => 'Your Email is Invalid',
            'message.required' => 'The Message Filed is Required'
        ];
        $Validator = Validator::make($r->all() , $Rules , $ErrorsMessages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all())->withInput();
        }else{
            Mail::to('admin@jobcenter.com')->send(new ContactMail($r->except('_token')));
            return back()->withSuccess('Thanke Your For Your Time.');
        }
    }
}
