<?php
Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');