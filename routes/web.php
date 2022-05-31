<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadImageController;

Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();



//For adding an image
Route::get('/add-image',[UploadImageController::class,'addImage'])->name('Image.add');

//For storing an image
Route::post('/store-image',[UploadImageController::class,'storeImage'])
    ->name('Image.store');

//For showing an image
Route::get('/view-image',[UploadImageController::class,'viewImage'])->name('Image.view');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/courses/grades', 'App\Http\Controllers\PagesController@grades');
Route::get('/courses/attendance', 'App\Http\Controllers\PagesController@attendance');
Route::get('/courses/schedule', 'App\Http\Controllers\PagesController@schedule');
Route::get('/info', 'App\Http\Controllers\PagesController@info');
Route::get('/profile', 'App\Http\Controllers\PagesController@profile');

