<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Category;
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
        $Jobs = Job::orderBy('id' , 'desc')->paginate(12);
        return view('main.jobs' , compact('Categories' , 'Jobs'));
    }
}
