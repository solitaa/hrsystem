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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::put('/user/update', function(Illuminate\Http\Request $request){
    var_dump($request);
});
Route::put('/user/update', 'UserController@updateProfile');
//Route::resource('user', 'UserController')->except(['destroy']);

