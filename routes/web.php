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


Route::middleware('auth')->group(function(){


   Route::post('/tweets',function(){
        return view('tailwind');
    })->name('tweets');
    Route::get('/tweets',function(){
        return view('tailwind');
    });
    
    Route::get('/tweets','TweetController@index')->name('tweets');
    
// Route::post('/tweets','TweetController@store');
});

Route::get('/profiles/{user:name}','ProfilesController@show')->name('profile');
// Route::post('/profiles/{user:name}',function(){
//     return view('profiles');});
//Route::post('/profiles/{user:name}/follow','FollowController@store');

Route::get('/explore', 'ExploreController@index')->name('explore');

//Route::get('/search','ProfilesController@search')->name('search');
Route::get('search',function(){
    return view('search');
})->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
