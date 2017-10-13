<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
	Route::get('/', 'MainController@main');
Route::get('/a',function(){
    
   echo phpinfo(); 
});

	Route::get('/about','MainController@about');

	Route::group(['prefix' => 'services'], function () {
	    Route::get('/marketing','MainController@marketing');
	    Route::get('/branding','MainController@branding');
		Route::get('/peoplerelation','MainController@peopleRelation');
		Route::get('/socialresponsibility','MainController@socialResponsibility');
		Route::get('/corporatecommunication','MainController@corporateCommunication');
		Route::get('/socialmarketing','MainController@socialMarketing');
		Route::get('/digitalmarketing','MainController@digitalMarketing');
		Route::get('/design','MainController@design');
	});
	Route::get('/contact','MainController@contact');
	Route::get('/subscribers','AdminController@subscribers');
	Route::post('/getsubscriber','MainController@getSubscriber')->name('subscriber');
	Route::get('/changeLanguage/{name}','MainController@changeLanguage');
	Route::post('/contact_email','MailController@sendAdmin');
	
	//Routes For Blog
	// =======FRONT END ===========
	Route::get('/search_blog','MainController@search_blog');
	Route::get('/specificBlogs/{category_id}','MainController@getCategoryBlogs');
	Route::get('/blog_details/{id}','MainController@blogDetails');
	Route::get('/blogs','MainController@getBlogPosts');
	Route::get('/blogs_year/{year}','MainController@getBlogsByYear');
	Route::get('/news_year/{year}','MainController@getNewsByYear');


	//ROUTES FOR PROJECTS AND NEWS
	Route::get('/project_details/{id}','MainController@projectDetails');
	Route::get('/news_details/{id}','MainController@newsDetails');
	Route::get('/allnews','MainController@showAllNews');
	Route::get('/allprojects','MainController@showAllProjects');
	Route::get('/carrier','MainController@showCarrier');

	// =========ADMIN SIDE ===========
	Route::get('/admin_side','AdminController@loginPage');
	Route::post('/checkAdmin','AdminController@checkAdmin')->name('checkAdmin');
	Route::get('/log_out','AdminController@logout');
	Route::group(['middleware' => ['login']], function () {
	
		Route::resource('/admin_side/blogcategory','BlogControllerCategory');
		Route::resource('/admin_side/blog','BlogController');
		Route::resource('/admin_side/portfoliocategory','PortfolioCategoryController');
		Route::resource('/admin_side/portfolio','PortfolioController');
		Route::resource('/admin_side/news','NewsController');
		Route::get('/deletesubscriber/{id}','AdminController@deleteSubscriber')->name('deletesubscriber');
	});













