<?php
//Routes For FrontEnd
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', function () {
        return view('frontend.home.index');
    });
//    Routes For User Authenticate
    Route::get('/login','UserController@login')->name('frontend.login.form');
    Route::post('/login','UserController@doLogin')->name('frontend.doLogin');
    Route::get('/register','UserController@register')->name('frontend.register.form');
    Route::post('/register','UserController@doRegister')->name('frontend.doRegister');
    Route::get('/createRole','UserController@createRole');
    Route::get('/createPermission','UserController@createPermission');
    Route::get('/assignPermissionToRole','UserController@assignPermissionToRole');

});

//Routes For Admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware'=>['auth','role:1','permission:1']], function () {
    Route::get('/','AdminController@index')->name('admin.home');
});
