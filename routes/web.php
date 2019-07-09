<?php
//Routes For FrontEnd
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', function () {
        return view('frontend.home.index');
    });
//    Routes For User Authenticate
    Route::get('/login', 'UserController@login')->name('frontend.login.form');
    Route::post('/login', 'UserController@doLogin')->name('frontend.doLogin');
    Route::get('/logout', 'UserController@logout')->name('logout');
    Route::get('/resetpassword', 'UserController@resetPasswordFrom')->name('frontend.resetpasswordform');
    Route::post('/resetpassword', 'UserController@resetPassword')->name('frontend.resetpassword');
    Route::get('/setpassword', 'UserController@setNewPasswordForm')->name('frontend.setpasswordform');
    Route::post('/setpassword', 'UserController@setNewPassword')->name('frontend.setpassword');
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
    Route::get('/categories','CategoryController@index')->name('admin.category.index');

    Route::group(['middleware' => ['permission:1']], function () {
//        User Store
        Route::get('/user/create', 'UserController@create')->name('admin.user.create.form');
        Route::post('/user/create', 'UserController@store')->name('admin.user.store');
//        Category Store
        Route::get('/category/create','CategoryController@create')->name('admin.category.create.form');
        Route::post('category/create','CategoryController@store')->name('admin.category.store');
    });

});
