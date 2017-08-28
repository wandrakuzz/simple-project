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

Route::get('/project/suggest','SuggestController@index');
Route::Post('/project/create/submit', 'SuggestController@store');
Route::delete('/project/suggest/delete/{id}', 'SuggestController@destroy');

Route::get('/profiles','ProfileController@index');
Route::get('/profiles/form' , 'ProfileController@create');
Route::patch('/profiles/update/{id}', 'ProfileController@update');
Route::post('/profiles/avatar', 'ProfileController@updateAvatar');

Route::get('/phpinfo', function() {
    return phpinfo();
});
