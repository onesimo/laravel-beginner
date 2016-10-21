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


/*Route::post('post',function(){
	echo "hello word";
});

//post dosen't work
Route::match(['get','post'],'foo',function(){
	echo "hello word";
});

Route::any('any',function(){
	return 'hello';
});*/


Route::get('/dashboard', function () {
    //return $request->user();
})->middleware('auth:api');

Route::group(['middleware' => ['api', 'auth:api']], function(){
	Route::get('dashboard', function(){
		return 'You are authenticated via token';
	});
});
/*
 Route::group(['middleware' => ['web']], function(){
 	
 	
 	Route::group(['prefix' => 'auth/github'], function () {
 		Route::get('/','GithubController@redirect');
 		Route::get('callback', 'GithubController@handle');
 	});
	 
	
	Route::get('/', function () {
	    return view('welcome');

	});
	
	Route::get('/', function () {
	    return view('welcome');

	});

	Route::get('bar', function () {
	    return view('bar', [
	    	'name'=>'jhon',
	    	'email'=>'jhon@jhon.com',
	    	'some_html' => '<b>bold</b>'
	    ]);

	});
	
	Route::group(['prefix'=> 'user'], function (){

		Route::get('/', ['uses' => 'UserController@index']);
		Route::get('/add', ['uses' => 'UserController@create']);
		Route::post('/add', ['uses' => 'UserController@store']);
		Route::get('{id}', ['uses' => 'UserController@show']);
		
	});

});
*/
//Auth::routes();

//Route::get('/home', 'HomeController@index');
