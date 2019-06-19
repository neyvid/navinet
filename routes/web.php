<?php
Route::get('/', function () {
    return view('frontend.home.index');
});
Route::get('/admin', function () {
    return view('admin.panel.index');
});
