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

//Route::get('/', function () {
//    return view('index');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('categories', 'CategorieController');
Route::resource('souscategories', 'SousCategorieController');
Route::resource('messages', 'MessageController');

//Route::middleware('auth')->group(function () {
////    Route::resource('categories', 'CategorieController', [
////        'only' => ['create', 'update'],
////    ]);
//    Route::get('/mes-categories', 'CategorieController@index')->name('mescategories');
//});