<?php
Route::get('/' , 'FrontEndController@getIndex')->name('home');
Route::get('/about' , 'FrontEndController@getAbout')->name('about');
Route::get('/contact' , 'ContactController@getContactView')->name('contact');
Route::post('/contact' , 'ContactController@ProccessContact')->name('contact.do');
Route::get('/signup' , 'AuthController@getSignup')->name('signup');
Route::post('/signup' , 'AuthController@postSignup')->name('signup.do');
Route::get('/login' , 'AuthController@getLogin')->name('login');
Route::post('/login' , 'AuthController@postLogin')->name('login.do');









//Dashboard Routes
// Route::prefix('dashboard')->group(function(){
// })->middlware('auth');
