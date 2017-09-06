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

/* GET Routes */

Route::get('/', function (){
    return view('index');
})->name('index');

Route::get('/about', function (){
    return view('about');
})->name('about');

Route::get('/support', function (){
    return view('support');
})->name('support');

Route::get('/contact', function (){
    return view('contact');
})->name('contact');

/* GET Controller Routes */

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/profile/edit', 'ProfileController@editIndex')->name('editProfile');

Route::get('/matches', 'JobController@matchIndex')->name('matches');

Route::get('/job/{id}', 'JobController@displayJob')->name('displayJob');

Route::get('/job/{id}/apply', 'JobController@displayApplyForJob')->name('displayApplyForJob');

/* POST Controller Routes */

Route::post('/enquire', 'ContactController@send')->name('enquire');

Route::post('/profile/update', 'ProfileController@updateProfile')->name('updateProfile');

Route::post('/profile/delete', 'ProfileController@delete')->name('delete');

Route::post('/profile/upload', 'ProfileController@uploadResume')->name('resume');

/* Authentication Routes */

Auth::routes();

/* API Routes */

Route::get('/api/user', function(){
	if(Auth::user() != null){
		return Auth::user();
	}
	else{
		return "ERROR 01: Session Error.";
	}
});

Route::get('/api/jobs/{state}', 'JobController@getJobs')->name('getJobs');
