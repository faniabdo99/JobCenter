<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Category;
use App\City;
use App\Post;
class FrontEndController extends Controller{
    public function ChangeLanguage($locale){
        if (in_array($locale, \Config::get('app.locales'))) {
          session(['locale' => $locale]);
        }
        return redirect()->back();
    }
    public function getIndex(){
        $Categories = Category::orderBy('id' , 'desc')->limit(6)->get();
        $TopSixJobs = Job::orderBy('id' , 'desc')->limit(6)->get();
        $LatestCompanies1 = User::where([['type' , 'company'],['active' , '1']])->orderBy('id' , 'desc')->skip(0)->take(2)->get();
        $LatestCompanies2 = User::where([['type' , 'company'],['active' , '1']])->orderBy('id' , 'desc')->skip(2)->take(2)->get();
        $TopBlogPosts = Post::orderBy('id' , 'desc')->limit(2)->get();
        return view('main.index' , compact('Categories' , 'TopSixJobs' , 'LatestCompanies1', 'LatestCompanies2','TopBlogPosts'));
    }
    public function getAbout(){
        return view('main.about');
    }
    public function getAllJobs(){
        $Categories = Category::orderBy('id' , 'desc')->limit(6)->get();
        $Cites = City::orderBy('id' , 'desc')->limit(6)->get();
        $Jobs = Job::orderBy('id' , 'desc')->paginate(8);
        return view('main.jobs' , compact('Categories' , 'Jobs' , 'Cites'));
    }
    public function getCompanies(){
        $Companies = User::where('type' , 'company')->where('active' , '1')->paginate(9);
        return view('main.companies' , compact('Companies'));
    }
    public function getCompany($id){
        $Company = User::findOrFail($id);
        visits($Company)->increment();
        $Jobs1 = Job::where('company_id' , $Company->id)->orderBy('id','desc')->skip(0)->take(3)->get();
        $Jobs2 = Job::where('company_id' , $Company->id)->orderBy('id','desc')->skip(3)->take(3)->get();
        return view('main.company' , compact('Company' , 'Jobs1' , 'Jobs2'));
    }
    public function getUser($id){
      $User = User::findOrFail($id);
      return view('dash.user.profile' , compact('User'));

    }
}
