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

// Remove this after changes.
use App\User;

Route::get('/', function (){
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::post('/delete', 'Auth\DeleteController@delete')->name('delete');

/* Example - Return all models in JSON format. */
Route::get('/matches', function (){	
	/* Obviously, we'll do this with Jobs. */
	return User::all();
});
