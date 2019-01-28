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

    Route::get('/employees', 'EmployeeController@index')->name('employees');
    Route::get('/employee/create', 'EmployeeController@create')->name('employee.create');
    Route::post('/employee/store', 'EmployeeController@store')->name('employee.store');

    Route::get('/user/profile/{id}', 'UserController@profile')->name('user.profile');
    Route::post('/user/changePassword', 'UserController@changePassword')->name('user.changePassword');
    

});
