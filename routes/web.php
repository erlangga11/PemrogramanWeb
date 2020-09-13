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

Route::get('/', function () {
    return ('Selamat Datang');
});
    Route::get('/hello', 'HomeController@hello');
    Route::get('/about', 'AboutController@about');
    Route::get('/articles/{page}', 'ArticleController@article');
//});
