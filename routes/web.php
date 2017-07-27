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
    return view('welcome');
});

Route::get('/testmodel', function () {
	$query = App\Post::all(); 
    return $query;
});

Route::get('/testmodel1', function () {
    $query = App\Post::find(1);
    return $query;
});

Route::get('/testmodel2', function () {
    $query = App\Post::where('title','like','%Haruskah Menunda Nikah%')->get();
    return $query;
});

Route::get('/testmodel3', function () {
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

Route::get('/siswa1', function () {
	$query = App\Siswa::all(); 
    return $query;
});

Route::get('/siswa2', function () {
    $query = App\Siswa::find(1);
    return $query;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
