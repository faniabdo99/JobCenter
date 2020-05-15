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
        if(isset($r['city']) && $r['city'] != null){
          $WhereCity = ['city_id' , intval($r['city'])];
        }else {
          $WhereCity = ['city_id' , '!=' , null];
        }
        if(isset($r['category']) && $r['category'] != null){
          $WhereCategory = ['category_id' , $r['category']];
        }else {
          $WhereCategory = ['category_id' , '!=' , null];
        }
        if(isset($r['type']) && $r['type'] != null){
          $WhereType = ['type' , 'like' , '%' . $r['type'] . '%'];
        }else {
          $WhereType = ['type' , '!=' , null];
        }
        $Resultes = Job::orderBy('id' , 'desc')->where([
          ['title' , 'like', '%' . $r['query'] . '%'],
          $WhereCity,
          $WhereCategory,
          $WhereType
          ])->paginate(8);
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
    public function getCategories(){
      $Categories = Category::all();
      $Resultes = Category::latest()->get();
      return view('main.categories' , compact('Resultes' , 'Categories'));
    }
}
