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
    return view('index');
});

Auth::routes();
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });

Route::get('/home', 'HomeController@index')->name('home');
Route::get('comments','HomeController@comments');
Route::get('/comment_back','HomeController@comment_back');

// Socialite Routes
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');  
Route::get('add-about', 'HomeController@addAbout');    
Route::get('add-high-school', 'HomeController@addHighSchool');

