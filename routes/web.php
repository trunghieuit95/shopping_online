<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['namespace'=>'Admin','prefix'=>'admin'],function(){
	Route::get('/', [
			 'as'	=> 'admin.home', 'uses'	=> 'AdminController@index'
		]);
	Route::resource('cate', 'CategoryController',[
			'only' => ['index','create', 'store', 'edit', 'update', 'destroy']
		]);
	Route::resource('product', 'ProductController',[
			'only' => ['index','create', 'store', 'edit', 'update', 'destroy']
		]);
});
// Route::get('/', function () {
//     return view('errors.503');
// });
