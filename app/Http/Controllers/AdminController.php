<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Models
use App\User;
use App\Job;
use App\Application;
use App\Post;
use App\City;
use App\Category;
use App\Comment;
class AdminController extends Controller{
    public function getHome(){
      $Users = User::where('type' , 'user')->count();
      $Companies = User::where('type' , 'company')->where('active' , '1')->count();
      $InActiveCompanies = User::where('type' , 'company')->where('active' , '0')->count();
      $Jobs = Job::count();
      $Applications = Application::count();
      $BlogPosts = Post::count();
      $Cites = City::count();
      $Categories = Category::count();
      $Comments = Comment::count();
      $BlogViews = visits('App\Post')->count();
      return view('admin.index' , compact('Users' , 'Companies' , 'InActiveCompanies','Jobs','Applications','BlogPosts','BlogViews','Cites','Categories','Comments'));
    }

    //Users
    public function getUsers(){
      $Users = User::where('type' , 'user')->orderBy('id')->get();
      return view('admin.users.all' , compact('Users'));
    }
    public function deleteUser($id){
      $User = User::find($id);
      $User->delete();
      return back()->withSuccess('User ' .$User->name.' Deleted !');
    }


    //Companies
    public function getCompanies(){
      $Users = User::where('type' , 'company')->where('active' , '1')->orderBy('id')->get();
      return view('admin.companies.all' , compact('Users'));
    }
    public function getInActiveCompanies(){
      $Users = User::where('type' , 'company')->where('active' , '0')->orderBy('id')->get();
      return view('admin.companies.all' , compact('Users'));
    }
    public function deleteCompany($id){
      $User = User::find($id);
      $User->delete();
      return back()->withSuccess('The Company ' .$User->name.' Deleted !');
    }
    public function deactivateCompany($id){
      $User = User::find($id);
      $User->active = '0';
      $User->save();
      return back()->withSuccess('The Company ' .$User->name.' Has Been Deactivated !');
    }
    public function activateCompany($id){
      $User = User::find($id);
      $User->active = '1';
      $User->save();
      return back()->withSuccess('The Company ' .$User->name.' Has Been Activated !');
    }
}
