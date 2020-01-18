<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
use Mail;
//Models
use App\User;
//Mails
use App\Mail\WelcomeNewUser;
class AuthController extends Controller{
    public function getSignup(){
        return view('main.auth.signup');
    }
    public function postSignup(Request $r){
        $Rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ];
        $ErrorsMessages = [
            'name.required' => 'Your Name is Required',
            'email.required' => 'Your Email is Required',
            'email.email' => 'Your Email is Invalid',
            'email.unique' => 'This Email is Already Taken',
            'password.required' => 'Your Password is Required'
        ];
        $Validator = Validator::make($r->all() , $Rules , $ErrorsMessages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all())->withInput();
        }else{
            //Signup
            $UserData = $r->except('_token');
            $UserData['signup_method'] = 'signup';
            $UserData['code'] =  mt_rand(100000, 999999);
            $UserData['password'] = Hash::make($r->password);
            $UserData['username'] = strtolower(str_replace(' ' , '_' , $r->name));
            $User = User::create($UserData);
            //Send Welcome (Activate Account Basically) Email
            Mail::to($User->email)->send(new WelcomeNewUser($UserData));
            //Login Using id Here 
            Auth::loginUsingId($User->id);
            //Redirect to Dashboard.
            if($User->type == 'user'){
                return redirect()->route('dash.user.home');
            }elseif($User->type == 'company'){
                return redirect()->route('dash.company.home');
            }else{
                return redirect()->route('home');

            }
        }
    }
    //Activate Account
    public function ActivateAccount($code){
        $User = User::where('code' , $code)->first();
        if(isset($User->exists) && $User->exists == true ){
            $User->active = 1;
            $User->save();
            //Send to Dasboard With Success Message
        }else{
            exit("This Code is Invalid.");
        }
    }
    public function getLogin(){
        return view('main.auth.login');
    }
    public function postLogin(Request $r){
        $Rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $ErrorsMessages = [
            'email.required' => 'Your Email is Required',
            'email.email' => 'Your Email is Invalid',
            'password.required' => 'Your Password is Required'
        ];
        $Validator = Validator::make($r->all() , $Rules , $ErrorsMessages);
        if($Validator->fails()){
            return back()->withErrors()->withInput();
        }else{
            $Try = Auth::attempt(['email' => $r->email , 'password' => $r->password] , true);
            if($Try){
                return redirect()->route('home');
            }else{
                return back()->withErrors('Your Login Details are Wrong')->withInput();
            }
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
