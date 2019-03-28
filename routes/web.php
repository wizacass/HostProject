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
Route::get('/tasks', function() {
    return view('/tasks/index');
});

Route::get('/tasks/validation', 'ParticipantsController@home');
Route::post('/tasks/validation', 'ParticipantsController@store');
Route::delete('/tasks/validation', 'ParticipantsController@destroy');
Route::resource('/tasks/list', 'TasksController');

Route::get('/tasks/books', function() {
    return view('/tasks/books/index');
});
Route::resource('/tasks/books/publications', 'PublicationsController');
Route::resource('/tasks/books/subscribers', 'SubscribersController');
Route::get('/tasks/books/data', function() {
    return view('tasks/books/data');
});

Route::get('/apps', 'AppsController@home');
Route::get('/apps/binary', 'AppsController@binary');
