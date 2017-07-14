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

Route::get('/', 'ProjectsController@index');
Route::get('/projects', 'ProjectsController@redirect');
Route::get('/projects/create', 'ProjectsController@create');

// This needs to be after any porjects/* get requests ans it will overwrite them
Route::get('/projects/{project}', 'ProjectsController@show');

Route::post('/projects', 'ProjectsController@store');

