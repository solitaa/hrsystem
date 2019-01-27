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

//Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/user/details', 'UserController@index')->name('user.details');
    Route::post('/user/update', 'UserController@updateProfile')->name('user.update');


    Route::get('/company/details', 'CompanyController@index')->name('company.details');
    Route::post('/company/details/update', 'CompanyController@update')->name('company.details.update');



});
