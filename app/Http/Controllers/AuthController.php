<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
//Models
use App\User;
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
            $User = User::create($UserData);
            //Send Welcome (Activate Account Basically) Email
            //Login Using id Here 
            Auth::loginUsingId($User->id);
            //Redirect to Dashboard.
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
}
