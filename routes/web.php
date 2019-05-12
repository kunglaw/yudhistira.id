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

/* Route::get('/', function () {
    return view('welcome');
});*/
Route::get("/",function(){
    $data["title"] = "Home";
    return view("index",$data);
});

Route::get("/post","PostController@index")->name("post");
Route::get("/post/detail/{post_id}","PostController@detail");

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

