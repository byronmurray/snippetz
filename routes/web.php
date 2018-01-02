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

Route::get('/', 'SnippetController@index');

Route::resource('snippets', 'SnippetController');

Route::post('/examples/{snippet}', 'SnippetController@storeExample')->name('snippets.example');

Route::get('/tags/{tag}', 'TagController@index');

Route::get('/language/{language}', 'languageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
