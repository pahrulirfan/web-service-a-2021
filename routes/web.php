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
})->name('home');

Route::get('/cv', 'HomeController@index')->name('cv-saya');
Route::get('/about', 'HomeController@about')->name('tentang');

// route untuk tabel course menggunakan method resource
Route::resource('course', 'CourseController');
// route untuk tabel course
Route::get('/kursus', 'CourseController@index')->name('course.index');
Route::get('/kursus/create', 'CourseController@create')->name('course.create');
Route::post('/kursus/store', 'CourseController@store')->name('course.store');
