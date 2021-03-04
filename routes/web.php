<?php
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::prefix('admin')->group(function() {
        Route::resource('/blog', 'PostController');
    });
});
