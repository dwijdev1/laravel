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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/hello', function () {
//     return view('hello');
// });
Route::get('/','HelloController@index');
Route::get('/contact','HelloController@contact');
Route::get('/about','HelloController@about');
Route::get('/db_test','HelloController@db_test');