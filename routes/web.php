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
// use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/index/{id}', 'Test\UserController@show');
Route::get('article/index/{id}', 'Test\ArticleController@show');
Route::get('photo/store', 'Photo\PhotoController@store');


Route::get('/getcache', function () {
    echo  Cache::get('key');
});

Route::get('/setcache','Test\UserController@setCache');

// Route::get('/foo', function () {
//     return 'Hello World';
// });


Route::match(['post'], 'foo', function () {
    return 'This is a request from get or post';
});

Route::any('bar', function () {
    return 'This is a request from any HTTP verb';
});

Route::get('/array', function () {
    return [1, 2, 3];
});
// Route::get('log/index/{id}', 'Test\UserController@Log');

Route::resource('photos', 'PhotoController');
Route::get('user/profile/{id}', 'Test\UserController@profile');

Route::get('home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});


