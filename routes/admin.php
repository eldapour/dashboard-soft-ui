<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin'],function (){
    Route::get('login', 'AuthController@index')->name('admin.login');
    Route::POST('login', 'AuthController@login')->name('admin.login');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    Route::get('/','MainController@index')->name('adminHome');

    Route::resource('admins','AdminController');
    Route::post('/delete_admin','AdminController@delete')->name('delete_admin');
    Route::post('/admins_update','AdminController@update')->name('admins_update');


#### Auth ####
Route::get('logout', 'AuthController@logout')->name('admin.logout');

});

