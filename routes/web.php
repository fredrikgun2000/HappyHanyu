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

Route::get('/register','MainController@registerindex');
Route::get('/','MainController@loginindex');
Route::get('/home','MainController@homeindex');
Route::get('/insertdata','MainController@insertdataindex');
Route::get('/logout','MainController@logout');
//Route::get('/data','MainController@randomdata');
Route::get('/data','MainController@dataindex');
Route::get('/datarandom','MainController@datarandom');

Route::post('/register/post','MainController@registerpost');
Route::post('/login/post','MainController@loginpost');
Route::post('/insertdata/post','MainController@insertdatapost');