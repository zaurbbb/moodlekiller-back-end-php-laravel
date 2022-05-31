<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/courses/grades', 'App\Http\Controllers\PagesController@grades');
Route::get('/courses/attendance', 'App\Http\Controllers\PagesController@attendance');
Route::get('/courses/schedule', 'App\Http\Controllers\PagesController@schedule');
Route::get('/info', 'App\Http\Controllers\PagesController@info');

