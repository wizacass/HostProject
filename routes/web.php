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
    return view('index');
});

Route::get('/diary', 'DiaryController@home');
Route::get('/tasks', function(){
    return view('/tasks/index');
});

Route::get('/tasks/validation', 'ParticipantsController@home');
Route::post('/tasks/validation', 'ParticipantsController@store');
Route::delete('/tasks/validation', 'ParticipantsController@destroy');
Route::resource('/tasks/list', 'TasksController');

Route::get('/apps', 'AppsController@home');
Route::get('/apps/binary', 'AppsController@binary');
