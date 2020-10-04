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
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/chatview', 'MessageController@chateView')->name('chateView');

Route::get('/widget', 'HomeController@widget')->name('widget');


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

//chat_messages route
Route::get('chat_messages', 'MessageController@index' )->name('chat_messages');

Route::get('active_visitors', 'MessageController@activeVisitors' )->name('active_visitors');

Route::get('chat_messages/{id}', 'MessageController@activeVisitorsChat' );


Route::get('messages/{id}', 'MessageController@getMessageById' );
Route::get('update-status/{id}', 'VisitorController@updateStatusById' );


Route::get('chat-history', 'VisitorController@chatHistory' );








// Route::get('chat_messages',function()
// {
// 	return view('Admin.chatmessages.index');
// })->name('chat_messages');
