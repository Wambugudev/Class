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

Route::get('/students', 'studentsController@index');

Route::get('students/{id}','studentsController@show');

Route::get('/new-student', 'studentsController@create');

Route::post('/student-create', 'studentsController@add');


Route::get('/class/{Id}/edit', 'studentsController@edit');

Route::post('/class/{studentId}/edit', 'studentsController@update');

Route::get('/class/{studentId}/delete', 'studentsController@delete');
