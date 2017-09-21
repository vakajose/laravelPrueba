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
   
    return view('welcome',['nombre' => 'Bryan']);

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::name('posts_path')->get('/posts', 'PostsController@index');
Route::name('post_path')->get('/posts/{post}', 'PostsController@show');

Route::get('/layout', function(){

	return view('layouts.app');

});

/*
//ruta estatica  
Route::get('/hola', function(){

	return 'hola!';

});


//ruta dinanica
Route::get('/hola/{nombre}', 'HolaController@hola');
*/