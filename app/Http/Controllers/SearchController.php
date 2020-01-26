<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Job;
class SearchController extends Controller{
    public function getSearchPage(Request $r , $Type = null , $Type_id = null){
      if($Type == null){
        $Query = $r['query'];
        $Resultes = Job::orderBy('id' , 'desc')->where('title' , 'like', '%' . $r['query'] . '%')->paginate(8);
      }else{
          if($Type == 'category'){
            $QueryGet = Category::find($Type_id);
            $Query = "Category:" . $QueryGet->title;
            $Resultes = Job::orderBy('id' , 'desc')->where('category_id' ,$Type_id)->paginate(8);
          }elseif($Type == 'type'){
            $Query = "Type:" . $Type_id;
            $Resultes = Job::orderBy('id' , 'desc')->where('type' , 'like' , '%' . $Type_id . '%')->paginate(8);
          }elseif($Type == 'city'){
            $QueryGet = City::find($Type_id);
            $Query = "City:" . $QueryGet->name;
            $Resultes = Job::orderBy('id' , 'desc')->where('city_id' , $Type_id)->paginate(8);
          }
      }

      $Categories = Category::all();
      $Cities = City::all();
      return view('main.search' , compact('Resultes' , 'Query' , 'Type' ,  'Categories' , 'Cities'));
    }
}
