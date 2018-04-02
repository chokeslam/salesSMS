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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/paid', 'HomeController@paid')->name('paid');
Route::get('home/unpaid', 'HomeController@unpaid')->name('paid');
Route::get('home/sign-up', 'HomeController@signup')->name('signup');

Route::get('create', 'HomeController@create')->name('create');
Route::post('create/new', 'CreateController@new')->name('new');
Route::post('create/continue', 'CreateController@continue')->name('continue');

Route::get('edit/paid/{id}', 'EditController@paid')->name('edit_paid');
Route::get('edit/signup/{id}', 'EditController@signup')->name('edit_signup');

Route::get('/Transfer', 'HomeController@Transfer')->name('Transfer');
Route::get('/Engineering', 'HomeController@Engineering')->name('Engineering');
Route::get('/Business', 'HomeController@Business')->name('Business');

Route::post('Send','SendController@send')->name('Send');
