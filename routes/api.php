<?php

use Illuminate\Http\Request;
// use Illuminate\Routing\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kursus', 'API\CourseController@index');

Route::get('kursus/{data}/detail', 'API\CourseController@show');
