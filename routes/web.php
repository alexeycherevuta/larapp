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
        Route::post('/permissions/add', 'PermissionsController@addpermission')->name('role.create');
        Route::post('/permissions/revoke', 'PermissionsController@revokepermission')->name('role.delete');
        Route::get('/role', 'RoleController@index')->name('role.index');
        Route::post('/roles/create', 'RoleController@createRole')->name('roles.create');
        Route::get('/roles/{id}/delete', 'RoleController@deleteRole')->name('roles.delete');
        Route::get('/roles/{id}/edit', 'RoleController@showEdit')->name('roles.edit');
        Route::post('/roles/update', 'RoleController@update')->name('roles.update');
    });
});
