<?php

use Illuminate\Http\Request;
Route::post('favourite' , 'LikeController@postLike')->name('like.post');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
