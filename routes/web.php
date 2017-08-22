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

Route::get('/support', function (){
    return view('support');
})->name('support');

Route::get('/contact', function (){
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::post('/delete', 'Auth\DeleteController@delete')->name('delete');

/* Example - Return all jobs in JSON format. */
Route::get('/all-jobs', function (){
	return Job::all();
});
