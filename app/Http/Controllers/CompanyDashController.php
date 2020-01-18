<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Models
use App\User;
class CompanyDashController extends Controller{
    private function getUser(){
        if(auth()->check()){
            $User = User::where('id' , auth()->user()->id)->where('type' , 'company')->first();
            return $User;
        }else{
            return null;
        }
    }
    public function getHome(){
        $User = $this->getUser();
        return view('dash.company.index' , compact('User'));
    }
}
