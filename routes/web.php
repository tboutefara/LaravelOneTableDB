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

Route::get('/', 'App\Http\Controllers\MyController@index');
Route::get('/addnew', 'App\Http\Controllers\MyController@addnew');
Route::post('/savenew', 'App\Http\Controllers\MyController@savenew');
Route::get('/update/{id}', 'App\Http\Controllers\MyController@update');
Route::post('/saveupdate', 'App\Http\Controllers\MyController@saveupdate');
Route::get('/delete/{id}', 'App\Http\Controllers\MyController@delete');
Route::post('/confirmdelete', 'App\Http\Controllers\MyController@confirmdelete');
