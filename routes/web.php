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
Route::get('/tasks', 'TaskController@home');
Route::get('/tasks/validation', function() {
    return view('tasks/validation');
});
Route::post('/tasks/validation', 'TaskController@store');
