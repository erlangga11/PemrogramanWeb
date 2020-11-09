<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* ini pertemuan 2
Route::get('/', function () {
    return ('Selamat Datang');
});
    Route::get('/hello', 'HomeController@hello');
    Route::get('/about', 'AboutController@about');
    Route::get('/articles/{page}', 'ArticleController@article');
    
    
//});*/
    //Ini pertemuan 3
    /*Route::get('/hello', function () {
        return view('hello', ['name' => 'Erlangga']);
        });*/
    /*Route::get('/hello', function () {
    return view('blog.hello', ['name' => 'Erlangga Natanegara']);
    });*/
    Route::get('/hello','WelcomeController@hello');
    Route::get('/about', 'AboutController@about');
    //Route::get('/home', 'HomeController@home');
    //Route::get('/home/{page}', 'HomeController@home2');
    Route::get('/articles/{id}', 'ArticleController');
    Route::get('/homebs', 'HomeController@homebs');
    Route::get('/homecc', 'HomeController@homecc')->name ('homecc');
    Route::get('/postbs', 'ArticleController@postbs');
    Route::get('/homequiz','HomeController@homequiz' );
    Route::get('/gallery','galleryController@gallery' );

Auth::routes();
Route::get('/home', 'HomeController@homequiz')->name('home');
Route::get('/logout' ,function(){
	$logout=Auth::logout();
	return view('auth.login');
});
Route::get('/' ,function(){
	return view('auth.login');
});
Route::get('/manage', 'ArticleController@index')->name('manage');
Route::get('/article/add','ArticleController@add');
Route::post('/article/create','ArticleController@create');
Route::get('/article/edit/{id}','ArticleController@edit');
Route::post('/article/update/{id}','ArticleController@update');
Route::get('/article/delete/{id}','ArticleController@delete');

Route::get('/user','UserController@index');
Route::get('/user/edit/{id}','UserController@edit');
Route::post('/user/update/{id}','UserController@update');
Route::get('/user/delete/{id}','UserController@delete');

