<?php

use Illuminate\Http\Request;
Route::post('favourite' , 'LikeController@postLike')->name('like.post');
Route::post('/admin/blog/files/{id?}' , 'BlogController@StoreFiles')->name('admin.blog.files');
Route::post('/company/files/{id?}' , 'CompanyDashController@StoreAttachments')->name('company.files');


?>
