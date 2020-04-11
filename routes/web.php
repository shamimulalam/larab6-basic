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
Route::get('pnt','PeoplentechController@index');
Route::get('peoplentech/about','PeoplentechController@about');
Route::get('pnt/about/form','PeoplentechController@form');
Route::get('pnt/about/preview','PeoplentechController@preview');
