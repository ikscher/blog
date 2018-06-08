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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/index/{id}', 'Test\UserController@show');
Route::get('member/index', 'Test\MemberController@show');
Route::get('bid/index', 'Test\BidController@index');
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
Route::get('photo/index', 'Photo\PhotoController@index');
Route::get('photo/create', 'Photo\PhotoController@create');
Route::get('user/profile/{id}', 'Test\UserController@profile');
Route::get('post/show/{id}', 'Test\PostController@show');
Route::get('post/index', 'Test\PostController@index');
// Route::get('post/store/{id}', 'Test\PostController@store');

Route::get('home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
    
});

Route::get('cookie/response', function () {
	Cookie::queue(Cookie::make('site', 'Laravel学院',1));
    Cookie::queue('author', '学院君', 1);
    return response('Hello World', 200)
        ->header('Content-Type', 'text/plain');
});


Route::get('/vi/{post}', function () {
    return 'aaa';
})->name('vi.show');

Route::get('/unsubscribe/{user}', function (Request $request) {
    // if (! $request->hasValidSignature()) {
    //     abort(404);
    // }

    // ...
})->name('unsubscribe')->middleware('signed');

Route::get('publish', function () {
    // Route logic...
    Redis::publish('test-channel', json_encode(['foo' => 'bar']));
});
