<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Post;
use App\Job;
use App\Section;
class BlogController extends Controller{
  public function getNew(){
    $Sections = Section::orderBy('id' , 'desc')->get();
    return view('admin.blog.new' , compact('Sections'));
  }
  public function postNew(Request $r){
    //Validation
    $ValidationRules = [
      'title' => 'required',
      'slug' => 'required|alpha_dash|unique:posts',
      'section_id' => 'required',
      'description' => 'required|max:255',
      'image' => 'nullable|image',
      'body' => 'required'
    ];
    $ErrorMessages = [
      'title.required' => 'The Post Title is Required',
      'slug.required' => 'The Post Slug is Required',
      'slug.alpha_dash' => 'The Post Slug Soulde Container Only Dashes (-) & Letters & Numbers',
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
      $PostData['user_id'] = auth()->user()->id;
      $Post = Post::create($PostData);
      return redirect()->route('blog.post' , $Post->slug);
    }
  }

  public function getNewSection(){
    return view('admin.blog.new-section');
  }

  public function postNewSection(Request $r){
    //Validation
    $ValidationRules = [
      'title_en' => 'required',
      'title_ar' => 'required',
    ];
    $ErrorMessages = [
      'title_en.required' => 'The English Title is Required',
      'title_en.required' => 'The Arabic Title is Required',
    ];
    $Validator = Validator::make($r->all() , $ValidationRules,$ErrorMessages);
    if($Validator->fails()){
      return back()->withErrors($Validator->errors()->all());
    }else{
      Section::create($r->except('_token'));
      return back()->withSuccess("Section Created Succefully!");
    }
  }
public function getAllSections(){
  $Resultes = Section::latest()->get();
  return view('admin.blog.all-sections' , compact('Resultes'));
}
public function deleteBlogSection($id){
  Section::findOrFail($id)->delete();
  return back()->withSuccess('Blog Section Deleted');
}
public function getEditBlogSection($id){
  $res = Section::findOrFail($id);
  return view('admin.blog.edit-section' , compact('res'));
}
public function postEditBlogSection(Request $r ,$id){
  //Validation
  $ValidationRules = [
    'title_en' => 'required',
    'title_ar' => 'required',
  ];
  $ErrorMessages = [
    'title_en.required' => 'The English Title is Required',
    'title_en.required' => 'The Arabic Title is Required',
  ];
  $Validator = Validator::make($r->all() , $ValidationRules,$ErrorMessages);
  if($Validator->fails()){
    return back()->withErrors($Validator->errors()->all());
  }else{
    $Section = Section::findOrFail($id)->update([
      'title_en' => $r->title_en,
      'title_ar' => $r->title_ar
    ]);
    return redirect()->route('admin.blog.sections')->withSuccess('Blog Section Updated Succefully');
  }

}

  //Front End Blog
  public function getIndex(){
    $JobsSpotlight = Job::orderBy('id' , 'desc')->limit(3)->get();
    $Posts = Post::orderBy('id' , 'desc')->paginate(6);
    return view('main.blog.index' , compact('Posts' , 'JobsSpotlight'));
  }
  public function getSingle($slug){
    $Post = Post::where('slug' , $slug)->first();
    if($Post == null){
      abort(404);
    }else{
      visits($Post)->increment();
      $JobsSpotlight = Job::orderBy('id' , 'desc')->limit(3)->get();
      return view('main.blog.single' , compact('Post' , 'JobsSpotlight'));
    }
  }
  public function getSearch(Request $r , $type = null , $section = null){
    $JobsSpotlight = Job::orderBy('id' , 'desc')->limit(3)->get();
    if($type == null){
      $Posts = Post::where('title' , 'like', '%' . $r['query'] . '%')->paginate(8);
    }else{
      $Posts = Post::where('section_id' , $section)->paginate(8);
    }

    return view('main.blog.search' , compact('Posts' , 'JobsSpotlight'));
  }
}
