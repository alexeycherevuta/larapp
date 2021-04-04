<?php
use Illuminate\Http\Request;
Route::post('/login', 'Api\ApiController@authenticate');
Route::middleware(['jwt.auth'])->group(function (){
   Route::get('/user', 'Api\ApiController@getUser');
});
