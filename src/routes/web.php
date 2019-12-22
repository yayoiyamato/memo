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

Route::get('/', 'MemosController@index');
Route::get('/detail/{id}', 'MemosController@detail');
Route::get('/categories', 'MemosController@categories');
Route::get('/categories/{id}', 'MemosController@MemosInCategory');
Route::get('/add', 'MemosController@add');
