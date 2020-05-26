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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', 'PhotoController@index');
Route::get('/upload', 'UploadController@index');
Route::post('/confirm', 'UploadController@store');
Route::post('/complete', 'UploadController@complete');
Route::get('/edit', 'PhotoController@edit');
Route::post('/edit', 'PhotoController@update');
Route::get('/del', 'PhotoController@delete');
Route::post('/del', 'PhotoController@remove');




