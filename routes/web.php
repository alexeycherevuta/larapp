<?php
Route::view('/', 'welcome');
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('image', 'ImageController@create')->name('image.show');
    Route::post('image', 'ImageController@store')->name('image.create');
    Route::prefix('admin')->group(function () {
        Route::get('/user/spy/{id}', 'UsersController@spy')->name('users.spy');
        Route::resource('/post', 'PostController');
        Route::resource('/permissions', 'PermissionsController')->except('update', 'edit');
        Route::post('/permissions/add', 'PermissionsController@add')->name('permissions.add');
        Route::post('/permissions/revoke', 'PermissionsController@revoke')->name('permissions.revoke');
        Route::resource('/roles', 'RolesController');
        Route::get('/users', 'UsersController@index')->name('users.index');
        Route::get('/users/{id}/add', 'UsersController@add')->name('users.add');
        Route::get('/users/{id}/remove', 'UsersController@remove')->name('users.remove');
    });
});
