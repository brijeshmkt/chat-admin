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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/message', 'MessageController@store');

Route::get('/addVisitor', 'VisitorController@store');


Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('dashboard','DashboardController@index')->name('dashboard');

//user route
Route::get('users','UserController@index')->name('users');
Route::get('users/edit/{id}','UserController@edit')->name('user-edit');
Route::get('users/add','UserController@create')->name('user-add');

Route::post('users/store','UserController@store')->name('user-store');
Route::post('users/update/{id}','UserController@update')->name('user-update');
Route::get('users/destroy/{id}','UserController@destroy')->name('user-destroy');
Route::get('users/show/{id}','UserController@show')->name('user-view');
Route::get('users/search', 'UserController@search')->name('user-search');

