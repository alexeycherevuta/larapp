<?php
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('image', 'ImageController@create')->name('image.show');
    Route::post('image', 'ImageController@store')->name('image.create');
    Route::prefix('admin')->group(function () {
        Route::resource('/blog', 'PostController');
    });
});
