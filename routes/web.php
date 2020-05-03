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

Route::get('/git', function () {
    return view('git');
});
Route::post('contactus', ['as'=>'contactus.store','uses'=>'ContactController@create']);

// Route::get('/{fa}', function ($locale) {
//     App::setLocale($locale);
//     return view('index');


//     //
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/note', 'HomeController@note')->name('note');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
