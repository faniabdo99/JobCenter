<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Comment;
class CommentsController extends Controller{
    public function postNew(Request $r){
      $Validator = Validator::make($r->all() , ['description' => 'required'] ,['description.required' => 'Comment Text is Required'] );
      if($Validator->fails()){
        return back()->withErrors($Validator->errors()->all());
      }else {
        $CommentData = $r->except('_token');
        $CommentData['user_id'] = auth()->user()->id;
        $CommentData['post_id'] = $r->post_id;
        Comment::create($CommentData);
        return back();
      }
    }
}
