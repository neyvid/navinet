<?php
//Routes For FrontEnd
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', function () {
        return view('frontend.home.index');
    });
//    Routes For User Authenticate
    Route::get('/login', 'UserController@login')->name('frontend.login.form');
    Route::post('/login', 'UserController@doLogin')->name('frontend.doLogin');
    Route::get('/register', 'UserController@register')->name('frontend.register.form');
    Route::post('/register', 'UserController@doRegister')->name('frontend.doRegister');
    Route::get('/createRole', 'UserController@createRole');
    Route::get('/createPermission', 'UserController@createPermission');
    Route::get('/assignPermissionToRole', 'UserController@assignPermissionToRole');

});

//Routes For Admin
//Permission Define : 1-TotalAccess 2-SupporterAccess 3-UserAccess
//Role Define : 1-Manager 2-Supporter 3-User
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'role:1|2']], function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
//    Routes For User Controll in Admin
    Route::get('/users', 'UserController@index')->name('admin.user.index');
    Route::group(['middleware' => ['permission:1']], function () {
        Route::get('/user/create', 'UserController@create')->name('admin.user.create.form');
        Route::post('/user/create', 'UserController@store')->name('admin.user.store');
    });

});
