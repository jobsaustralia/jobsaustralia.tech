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

Route::get('/terms', function (){
    return view('terms');
})->name('terms');


/* GET Controller Routes */

Route::get('/job/{id}', 'JobController@jobIndex')->name('displayJob');

Route::get('/employer/{id}', 'JobController@employerProfile')->name('employer');

Route::get('/matches', 'JobController@matchIndex')->name('matches');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/profile/edit', 'ProfileController@editIndex')->name('editProfile');

Route::get('/applications', 'ApplicationController@indexApplications')->name('applications');


/* POST Controller Routes */

Route::post('/enquire', 'ContactController@send')->name('enquire');

Route::post('/job/apply', 'ApplicationController@apply')->name('apply');

Route::post('/profile/delete', 'ProfileController@delete')->name('delete');

Route::post('/profile/update', 'ProfileController@updateProfile')->name('updateProfile');

Route::post('/resume/upload', 'ResumeController@uploadResume')->name('resume');


/* Authentication Routes */

Auth::routes();


/* API Routes */

/* Return currently authenticated user. */
Route::get('/api/user', 'APIController@getUser')->name('getUser');

/* Return jobs by state. */
Route::get('/api/jobs/state/{state}', 'APIController@getJobsByState')->name('getJobsByState');

/* Return jobs by state. */
Route::get('/api/jobs/employer/{employerid}', 'APIController@getJobsByEmployer')->name('getJobsByEmployer');
