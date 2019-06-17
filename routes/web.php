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
    return view('welcome');
});

Route::get('/minprofile', 'PagesController@profile');
Route::get('/mindiary', 'PagesController@diary')->name('mindiary_index');
Route::get('/paint', 'PagesController@paint');
Route::get('mindiary/new', 'PostController@create');
Route::get('mindiary/edit/{post_id}', 'PostController@edit');
Route::get('mindiary/edit', 'PostController@afteredit');
Route::post('/mindiary', 'PostController@postview');
Route::get('mindiary/{post_id}', 'PostController@afterdelete');
