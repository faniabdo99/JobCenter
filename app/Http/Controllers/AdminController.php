<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
//Models
use App\User;
use App\Job;
use App\Application;
use App\Post;
use App\City;
use App\Category;
use App\Comment;
use App\Section;
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
      $UserJob = Job::where('company_id' , $id)->delete(); //Delete The Company Jobs
      $User->delete(); // Delete The Company
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


    //Jobs
    public function getJobs(){
      $Resultes = Job::orderBy('id' , 'desc')->get();
      return view('admin.jobs.all' , compact('Resultes'));
    }
    public function deleteJob($id){
      $Job = Job::find($id);
      if($Job !== null){
        $Job->delete();
        return back()->withSuccess('Job Has Been Deleted');
      }else{
        return back()->withErrors('This Job is Already Deleted');
      }
    }

    //Applications
    public function getApplications(){
      $Resultes = Application::orderBy('id' , 'desc')->get();
      return view('admin.applications.all' , compact('Resultes'));
    }
    public function deleteApplication($id){
      $Application = Application::find($id);
      if($Application !== null){
        $Application->delete();
        return back()->withSuccess('Application Has Been Deleted');
      }else{
        return back()->withErrors('This Application is Already Deleted');
      }
    }
    //Blog ===============
    //Comments
    public function getComments(){
      $Resultes = Comment::orderBy('id' , 'desc')->get();
      return view('admin.blog.comments' , compact('Resultes'));
    }
    public function deleteComment($id){
      $Comment = Comment::find($id);
      if($Comment !== null){
        $Comment->delete();
        return back()->withSuccess('Comment Has Been Deleted');
      }else{
        return back()->withErrors('This Comment is Already Deleted');
      }
    }
    //Posts
    public function getAllBlogPosts(){
      $Resultes = Post::orderBy('id' , 'desc')->get();
      return view('admin.blog.all' , compact('Resultes'));
    }
    public function deleteBlogPost($id){
      $Post = Post::find($id);
      if($Post !== null){
        $Post->delete();
        return back()->withSuccess('Post Has Been Deleted');
      }else{
        return back()->withErrors('This Post is Already Deleted');
      }
    }
    public function postEditBlogPost(Request $r , $id){
      //Validation
      $ValidationRules = [
        'title' => 'required',
        'slug' => 'required|alpha_dash',
        'section_id' => 'required',
        'description' => 'required|max:255',
        'image' => 'nullable|image',
        'body' => 'required'
      ];
      $ErrorMessages = [
        'title.required' => 'The Post Title is Required',
        'slug.required' => 'The Post Slug is Required',
        'slug.unique' => 'This Post Slug is Already Taken',
        'section_id.required' => 'The Post Section is Required',
        'description.required' => 'The Post Description is Required',
        'description.max' => 'The Post Description is 255 Characters Max',
        'image.image' => 'The Post Image is Invalid',
        'body.required' => 'The Post Body is Required'
      ];
      $Validator = Validator::make($r->all() , $ValidationRules , $ErrorMessages );
      if($Validator->fails()){
        return back()->withErrors($Validator->errors()->all());
      }else{
        $PostData = $r->except('_token');
        //Save The Post
        if($r->has('image')){
          $image = $r->slug.'.'.$r->image->getClientOriginalExtension();
          $r->image->storeAs('public/blog' , $image);
          $PostData['image'] = $image;
        }
        $Post = Post::findOrFail($id);
        $Post->update($PostData);
        return redirect()->route('admin.blog');
      }
    }
    public function getEditBlogPost($id){
      $Sections = Section::orderBy('id' , 'desc')->get();
      $Post = Post::findOrFail($id);
      return view('admin.blog.edit' , compact('Post' , 'Sections'));
    }
    //City
    public function getCities(){
      $Resultes = City::orderBy('id' , 'desc')->get();
      return view('admin.city.all' , compact('Resultes'));
    }
    public function getNewCity(){
      return view('admin.city.add');
    }
    public function postNewCity(Request $r){
      //Valdidate
      $Rules = [
        'name_ar' => 'required',
        'name_en' => 'required'
      ];
      $ErrorMessages = [
        'name_ar.required' => 'City Arabic Name is Required',
        'name_en.required' => 'City English Name is Required'
      ];
      $Validator = Validator::make($r->all() , $Rules , $ErrorMessages);
      if($Validator->fails()){
        return back()->withErrors($Validator->errors()->all());
      }else{
        City::create($r->except('_token'));
        return redirect()->route('admin.cities');
      }
    }
    public function deleteCity($id){
      $City = City::find($id);
      if($City !== null){
        $City->delete();
        return back()->withSuccess('City Has Been Deleted');
      }else{
        return back()->withErrors('This City is Already Deleted');
      }
    }
    public function getUpdateCity($id){
      $City = City::findOrFail($id);
      return view('admin.city.edit' , compact('City'));
    }
    public function postUpdateCity(Request $r , $id){
      //Valdidate
      $Rules = [
        'name_ar' => 'required',
        'name_en' => 'required'
      ];
      $ErrorMessages = [
        'name_ar.required' => 'City Arabic Name is Required',
        'name_en.required' => 'City English Name is Required'
      ];
      $Validator = Validator::make($r->all() , $Rules , $ErrorMessages);
      if($Validator->fails()){
        return back()->withErrors($Validator->errors()->all());
      }else{
        $City = City::findOrFail($id);
        $City->update($r->except('_token'));
        return redirect()->route('admin.cities');
      }
    }
    //Website Category
    public function getCategories(){
      $Resultes = Category::orderBy('id' , 'desc')->get();
      return view('admin.category.all' , compact('Resultes'));
    }
    public function getNewCategory(){
      return view('admin.category.add');
    }
    public function postNewCategory(Request $r){
      //Valdidate
      $Rules = [
        'title_ar' => 'required',
        'title_en' => 'required'
      ];
      $ErrorMessages = [
        'title_ar.required' => 'Category Arabic Name is Required',
        'title_en.required' => 'Category English Name is Required'
      ];
      $Validator = Validator::make($r->all() , $Rules , $ErrorMessages);
      if($Validator->fails()){
        return back()->withErrors($Validator->errors()->all());
      }else{
        Category::create($r->except('_token'));
        return redirect()->route('admin.categories');
      }
    }
    public function deleteCategory($id){
      $Category = Category::find($id);
      if($Category !== null){
        $Category->delete();
        return back()->withSuccess('Category Has Been Deleted');
      }else{
        return back()->withErrors('This Category is Already Deleted');
      }
    }
    public function getUpdateCategory($id){
      $Category = Category::findOrFail($id);
      return view('admin.category.edit' , compact('Category'));
    }
    public function postUpdateCategory(Request $r , $id){
      //Valdidate
      $Rules = [
        'title_ar' => 'required',
        'title_en' => 'required'
      ];
      $ErrorMessages = [
        'title_ar.required' => 'Category Arabic Name is Required',
        'title_en.required' => 'Category English Name is Required'
      ];
      $Validator = Validator::make($r->all() , $Rules , $ErrorMessages);
      if($Validator->fails()){
        return back()->withErrors($Validator->errors()->all());
      }else{
        $Category = Category::findOrFail($id);
        $Category->update($r->except('_token'));
        return redirect()->route('admin.categories');
      }
    }
}
