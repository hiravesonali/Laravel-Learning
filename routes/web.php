<?php

use Illuminate\Support\Facades\Route;

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

//  Route::get('posts/{post}' , 'PostsController@show');

Route::get('/', function(){
return view('welcome');
});

Route::get('/about', function(){
    return view('about', [
    'articles' => App\Article::take(3)->latest()->get()  // order latest by descending or latest time 
    ]);

});

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');




// GET/articles
// GET/articles/:id

// GET, POST, DELETE, PUT

// PUT/articles/:id      ->for update
// DELETE/articles/:id      ->for delete


//  GET/videos
//  GET/videos/create  #create new video
//  POST/videos       #post data in database
//  GET/videos/2
//  GET/videos/2/edit
//  PUT/videos/2    #update video
//  DELETE/videos/2


// what if for video subscribe

// GET/video/subscribe   *it's verb and not gonna work 

//  ->
// POST/videos/subscriptions => VideoSubscriptionsController@store
