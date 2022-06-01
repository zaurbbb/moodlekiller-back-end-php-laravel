<<<<<<< HEAD
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadImageController;

Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


//For adding an image
Route::get('add-image',[UploadImageController::class,'addImage'])->name('Image.add');

//For storing an image
Route::post('/store-image',[UploadImageController::class,'storeImage'])
    ->name('Image.store');

//For showing an image
Route::get('/view',[UploadImageController::class,'viewImage'])->name('Image.view');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/courses/grades', 'App\Http\Controllers\PagesController@grades');
Route::get('/courses/attendance', 'App\Http\Controllers\PagesController@attendance');
Route::get('/courses/schedule', 'App\Http\Controllers\PagesController@schedule');
Route::get('/info', 'App\Http\Controllers\PagesController@info');
Route::get('/pro', 'App\Http\Controllers\PagesController@pro');

Route::get('/courses/professional_english', 'App\Http\Controllers\PagesController@professional_english');
Route::get('/courses/web_technologies_2', 'App\Http\Controllers\PagesController@web_technologies_2');
Route::get('/courses/algorithms_and_data_structures', 'App\Http\Controllers\PagesController@algorithms_and_data_structures');
Route::get('/courses/calculus_1', 'App\Http\Controllers\PagesController@calculus_1');
Route::get('/courses/coding_lab', 'App\Http\Controllers\PagesController@coding_lab');
Route::get('/courses/physical_culture_3', 'App\Http\Controllers\PagesController@physical_culture_3');
=======
>>>>>>> c6f55ba31efba73dcef394beb7b0ad7ef22c7e89
