<?php
Route::get('/' , 'FrontEndController@getIndex')->name('home');
Route::get('/about' , 'FrontEndController@getAbout')->name('about');
Route::get('/contact' , 'ContactController@getContactView')->name('contact');
Route::post('/contact' , 'ContactController@ProccessContact')->name('contact.do');
//Jobs
Route::get('/jobs' , 'FrontEndController@getAllJobs')->name('jobs');
Route::get('/job/{id}/{slug?}' , 'JobsController@getSingle')->name('job');
//Applications
Route::post('/apply/{job_id}/{user_id}' , 'ApplicationsController@postApplication')->middleware(['auth' , 'isNormalUser'])->name('apply.do');
//Users System
Route::middleware('guest')->group(function(){
    Route::get('/signup' , 'AuthController@getSignup')->name('signup');
    Route::post('/signup' , 'AuthController@postSignup')->name('signup.do');
    Route::get('/login' , 'AuthController@getLogin')->name('login');
    Route::post('/login' , 'AuthController@postLogin')->name('login.do');
});
Route::get('user/activate/{code}' , 'AuthController@ActivateAccount')->name('account.activate');
//Dashboard
Route::group(['prefix' => 'dashboard',  'middleware' => 'auth'], function(){
    Route::group(['prefix' => 'user','middleware' => ['isNormalUser']], function () {
        Route::get('/' , 'UserDashController@getHome')->name('dash.user.home');
        Route::get('/edit' , 'UserDashController@getEdit')->name('dash.user.edit');
        Route::post('/edit' , 'UserDashController@postEdit')->name('dash.user.edit.do');
        Route::get('/resume' , 'UserDashController@getResume')->name('dash.user.resume');
    });
    Route::group(['prefix' => 'company','middleware' => ['isCompany']], function () {
        Route::get('/' , 'CompanyDashController@getHome')->name('dash.company.home');
        Route::get('/edit' , 'CompanyDashController@getEdit')->name('dash.company.edit');
        Route::post('/edit' , 'CompanyDashController@postEdit')->name('dash.company.edit.do');
        Route::get('/new-job' , 'JobsController@getNew')->name('job.new');
        Route::post('/new-job' , 'JobsController@postNew')->name('job.new.do');
        Route::get('/jobs' , 'JobsController@getAll')->name('dash.company.jobs');
});

});
Route::get('/logout' , 'AuthController@logout')->middleware('auth')->name('logout');











