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
   
    return view('welcome',['nombre' => 'Jaria :3']);

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::name('posts_path')->get('/posts', 'PostsController@index');
Route::name('create_post_path')->get('/posts/create', 'PostsController@create');
Route::name('store_post_path')->post('/posts','PostsController@store');
Route::name('post_path')->get('/posts/{post}', 'PostsController@show');

Route::name('edit_post_path')->get('/posts/{post}/edit', 'PostsController@edit');
Route::name('update_post_path')->put('/posts/{post}','PostsController@update');
Route::name('delete_post_path')->delete('posts/{post}','PostsController@delete');


// en resumen el metodo PUT o PATCH es para hacer modificaciones de recursos asi que como
// el metodo DELETE es para eliminacion de recursos, es mala practica usar GET para la eliminacion de 
// recursos.

/*
//ruta estatica  
Route::get('/hola', function(){

	return 'hola!';

});


//ruta dinanica
Route::get('/hola/{nombre}', 'HolaController@hola');
*/