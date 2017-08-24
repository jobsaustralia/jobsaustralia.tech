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
});

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
=======
Route::get('/edit', function (){
    return view('edit');
})->name('edit');

Route::get('/profile/update/{id}', [
    'as' => 'edit',
    'uses' => 'profileController@update'
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');

/* Authentication Routes */

Auth::routes();

Route::post('/delete', 'Auth\DeleteController@delete')->name('delete');
