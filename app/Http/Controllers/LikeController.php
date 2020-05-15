<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Models
use App\Like;
class LikeController extends Controller{
    public function postLike(Request $r){
      $LikeData = $r->all();
      $Like = Like::where([
        ['item_type',$r->item_type],
        ['item_id',$r->item_id],
        ['user_id',$r->user_id]
        ])->first();
        if($Like !== null){
          $Like->delete();
          return response('Removed From Favourite !');
        }else{
          Like::create($LikeData);
          return response('Added to Favourite !');
        }
    }
    public function UnLike($id , $userId){
      Like::where('item_id' , $id)->where('user_id' , $userId)->where('item_type' , 'job')->delete();
      return back()->withSuccess(__('BackEnd.RemovedFromFav'));
    }
}
