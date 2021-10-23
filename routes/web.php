<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homes', 'HoemsController@index')->name('homes');
// Route::get('/homeFetch', 'HoemsController@homeFetch')->name('homeFetch');
Route::get('/homeDdata', 'HoemsController@allhomes')->name('allhomes');
Route::post('/homes-store', 'HoemsController@store')->name('homeStore');
Route::get('/aboutus', 'HomeController@about')->name('about');
Route::get('/edit-homes/{id}', 'HoemsController@edit')->name('editHomes');
Route::Post('/edit-homes-store/{id}', 'HoemsController@update')->name('editHomesstore');
Route::Post('/homes-delete/{id}', 'HoemsController@destroy')->name('deleteHomes');

Route::get('/contact', 'HoemsController@contact')->name('contact');
Route::post('/conatctstore', 'HoemsController@conatctstore')->name('conatctStore');
Route::get('/contactDdata', 'HoemsController@contacthomes')->name('contacthomes');
Route::Post('/contact-delete/{id}', 'HoemsController@contactdestroy')->name('deletecontact');
Route::get('/contactView/{id}', 'HoemsController@contactview')->name('contactview');

Route::post('/suststore', 'HoemsController@susstore')->name('susStore');
