<?php

use Illuminate\Http\Request;
Route::post('favourite' , 'LikeController@postLike')->name('like.post');
Route::post('/admin/blog/files/{id?}' , 'BlogController@StoreFiles')->name('admin.blog.files');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
