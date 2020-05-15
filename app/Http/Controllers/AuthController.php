<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
use Mail;
use Socialite;
//Models
use App\User;
//Mails
use App\Mail\WelcomeNewUser;
use App\Mail\ResetPasswordMail;
class AuthController extends Controller{
  //Social Login Shit
    public function redirectToProvider($driver){
      return Socialite::driver($driver)->redirect();
    }
    public function handleProviderCallback($driver){
        $user = Socialite::with($driver)->stateless()->user();
        //Check if this a new user
        $isThereIsUser = User::where('email' , $user->email)->first();
        if($isThereIsUser == null){
          //This is a New User
          $MadeUpPassword = 'womenJobCenterDefaultPasswordHere' . mt_rand(100000, 999999);
          $UserData['signup_method'] = $driver;
          $UserData['code'] =  mt_rand(100000, 999999);
          $UserData['email'] = $user->email;
          $UserData['name'] = $user->name;
          $UserData['image'] = $user->avatar;
          $UserData['type'] = 'user';
          $UserData['active'] = 1;
          $UserData['password'] = Hash::make($MadeUpPassword);
          $UserData['username'] = strtolower(str_replace(' ' , '_' , $user->name));
          $NewUser = User::create($UserData);
          Auth::loginUsingId($NewUser->id);
          $UserData['password'] = $MadeUpPassword;
          Mail::to($NewUser->email)->send(new WelcomeNewUser($UserData));
          return redirect()->route('dash.user.home');
        }else{
          //This is an Existing User
          if($isThereIsUser->signup_method == 'signup'){
            return back()->withErrors(__('BackEnd.RegisteredSocial'));
          }else{
            Auth::loginUsingId($isThereIsUser->id);
            //Redirect to Dashboard.
            return redirect()->route('dash.user.home');
          }
        }
    }
    public function getSignup(){
        return view('main.auth.signup');
    }
    public function postSignup(Request $r){
        $Rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_conf' => 'required|same:password',
        ];
        $ErrorsMessages = [
            'name.required' => __('BackEnd.NameRequired'),
            'email.required' => __('BackEnd.EmailRequired'),
            'email.email' => __('BackEnd.EmailInvalid'),
            'email.unique' => __('BackEnd.EmailAlreadyTaken'),
            'password.required' => __('BackEnd.PassRequired'),
            'password_conf.required' => __('BackEnd.PassConfRequired'),
            'password_conf.same' => __('BackEnd.PassDontMatch'),
        ];
        $Validator = Validator::make($r->all() , $Rules , $ErrorsMessages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all())->withInput();
        }else{
            //Signup
            $UserData = $r->except('_token');
            if($UserData['type'] == 'user'){
              $UserData['image'] = 'profile.png';
            }elseif($UserData['type'] == 'company'){
              $UserData['image'] = 'company.png';
            }
            $UserData['signup_method'] = 'signup';
            $UserData['code'] =  mt_rand(100000, 999999);
            $UserData['password'] = Hash::make($r->password);
            $UserData['username'] = strtolower(str_replace(' ' , '_' , $r->name));
            unset($UserData['password_conf']);
            $User = User::create($UserData);
            //Send Welcome (Activate Account Basically) Email
            $UserData['password'] = $r->password;
            if($UserData['type'] == 'user'){
              Mail::to($User->email)->send(new WelcomeNewUser($UserData));
            }
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
            if($User->type == 'user'){
                return redirect()->route('dash.user.home')->withSuccess(__('BackEnd.AccountActivated'));
            }elseif($User->type == 'company'){
                return redirect()->route('dash.company.home')->withSuccess(__('BackEnd.AccountActivated'));
            }else{
                return redirect()->route('home');
            }
            //Send to Dasboard With Success Message
        }else{
            exit(__('BackEnd.InvalidCode'));
        }
    }
    public function ResendActivationEmail($id){
      $User = User::findOrFail($id);
      $UserData = $User->getAttributes();
      Mail::to($User->email)->send(new WelcomeNewUser($UserData));
      return back()->withSuccess(__('BackEnd.MailSent'));
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
            'email.required' => __('BackEnd.EmailRequired'),
            'email.email' => __('BackEnd.EmailInvalid'),
            'password.required' => __('BackEnd.PassRequired')
        ];
        $Validator = Validator::make($r->all() , $Rules , $ErrorsMessages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all())->withInput();
        }else{
            $Try = Auth::attempt(['email' => $r->email , 'password' => $r->password] , true);
            if($Try){
                $User = User::find(auth()->user()->id);
                if($User->type == 'user'){
                    return redirect()->route('dash.user.home');
                }elseif($User->type == 'company'){
                    return redirect()->route('dash.company.home');
                }else{
                    return redirect()->route('home');
                }
            }else{
                return back()->withErrors(__('BackEnd.LoginDetailsWrong'))->withInput();
            }
        }
    }
    public function getForgetPassword(){
      return view('main.auth.forget');
    }
    public function postForgetPassword(Request $r){
      $Validator = Validator::make($r->all() , ['email' => 'required|email'] , ['email.required' => 'Your Email is Required!' , 'email.email' => 'This Email is Invalid']);
      if($Validator->fails()){
        return back()->withErrors($Validator->errors()->all());
      }else{
        $User = User::where('email' , $r->email)->first();
        if($User !== null){
          Mail::to($User->email)->send(new ResetPasswordMail($User));
        }else{
          //Do Nothing ...
        }
        return back()->withSuccess(__('BackEnd.ResetLinkSent'));
      }
    }
    public function passwordResetConfirm($user_id , $user_code){
      $User = User::find($user_id);
      if($User !== null){
        if($User->code == $user_code){
          Auth::loginUsingId($user_id);
          //redirect()->route('');
        }
      }else{
        return redirect()->route('home');
      }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
