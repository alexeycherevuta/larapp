<?php
Route::view('/', 'welcome');
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('image', 'ImageController@create')->name('image.show');
    Route::post('image', 'ImageController@store')->name('image.create');
    Route::prefix('admin')->group(function () {
        Route::get('/user/spy/{id}', 'UsersController@spy')->name('users.spy');
        Route::resource('/blog', 'PostController');
        Route::get('/permissions', 'PermissionsController@index')->name('permissions.index');
        Route::post('/permissions/create', 'PermissionsController@create')->name('permissions.create');
        Route::get('/permissions/{id}/delete', 'PermissionsController@delete')->name('permissions.delete');
        Route::post('/permissions/add', 'PermissionsController@add')->name('permissions.add');
        Route::get('/permissions/revoke', 'PermissionsController@revoke')->name('permissions.revoke');
        Route::get('/role', 'RolesController@index')->name('roles.index');
        Route::post('/roles/create', 'RolesController@create')->name('roles.create');
        Route::get('/roles/{id}/delete', 'RolesController@delete')->name('roles.delete');
        Route::get('/roles/{id}/edit', 'RolesController@showEdit')->name('roles.edit');
        Route::post('/roles/update', 'RolesController@update')->name('roles.update');
        Route::get('/users', 'UsersController@index')->name('users.index');
        Route::get('/users/{id}/add', 'UsersController@add')->name('users.add');
        Route::get('/users/{id}/remove', 'UsersController@remove')->name('users.remove');
    });
});
