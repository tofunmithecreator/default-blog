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

// Route::get('/', function ()
// {
//     return view('welcome');
// });
Route::resource('posts' , 'PostsController');
Route::get('/' , 'HomeController@index')->name('home');
Route::get('/base' , 'HomeController@base' )->name('base');
Route::get('/exit2' , 'HomeController@exit2')->name('GTFO');
Route::get('/exit' , 'HomeController@exit')->name('bye-bye');
Route::get('/stepping_stone' , 'HomeController@steps' )->name('stepz');
