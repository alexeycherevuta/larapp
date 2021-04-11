<?php
Route::view('/', 'welcome');
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('image', 'ImageController@create')->name('image.show');
    Route::post('image', 'ImageController@store')->name('image.create');
    Route::prefix('admin')->group(function () {
        Route::resource('/blog', 'PostController');
        Route::get('/permissions', 'PermissionsController@index')->name('permissions.index');
        Route::post('/permissions/create', 'PermissionsController@createPermission')->name('permissions.create');
        Route::get('/permissions/{id}/delete', 'PermissionsController@deletePermission')->name('permissions.delete');
    });
});
