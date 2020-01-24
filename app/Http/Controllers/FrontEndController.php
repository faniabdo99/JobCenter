<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Category;
use App\City;
class FrontEndController extends Controller{
    public function getIndex(){
        $Categories = Category::orderBy('id' , 'desc')->limit(6)->get();
        $TopSixJobs = Job::orderBy('id' , 'desc')->limit(6)->get();
        return view('main.index' , compact('Categories' , 'TopSixJobs'));
    }
    public function getAbout(){
        return view('main.about');
    }
    public function getAllJobs(){
        $Categories = Category::orderBy('id' , 'desc')->limit(6)->get();
        $Cites = City::orderBy('id' , 'desc')->limit(6)->get();
        $Jobs = Job::orderBy('id' , 'desc')->paginate(12);
        return view('main.jobs' , compact('Categories' , 'Jobs' , 'Cites'));
    }
    public function getCompanies(){
        $Companies = User::where('type' , 'company')->where('active' , '1')->get();
        return view('main.companies' , compact('Companies'));
    }
    public function getCompany($id){
        $Company = User::findOrFail($id);
        $Jobs1 = Job::where('company_id' , $Company->id)->orderBy('id','desc')->skip(0)->take(3)->get();
        $Jobs2 = Job::where('company_id' , $Company->id)->orderBy('id','desc')->skip(3)->take(3)->get();
        return view('main.company' , compact('Company' , 'Jobs1' , 'Jobs2'));
    }
}
