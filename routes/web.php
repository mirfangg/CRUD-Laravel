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

// Home page
Route::get('/', 'PagesController@home');

// About page
Route::get('/about', 'PagesController@about');

// Mahasiswa page
Route::get('/mahasiswa', 'MahasiswaController@index');

// Students page
// Route::get('/students', 'StudentsController@index'); // show all students
// Route::get('/students/create', 'StudentsController@create'); // create new student
// Route::get('/students/{student}', 'StudentsController@show'); // show detail of student
// Route::post('/students', 'StudentsController@store'); // store new data to database
// Route::delete('/students/{student}', 'StudentsController@destroy'); // delete data
// Route::get('/students/{student}/edit', 'StudentsController@edit'); // edit data
// Route::put('/students/{student}', 'StudentsController@update'); // update data

// Single line code use only
Route::resource('students', 'StudentsController');