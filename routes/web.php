<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Frontend')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

});

Auth::routes();

Route::prefix('admin')->group(function() {

    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::namespace('Admin')->middleware('auth:admin')->group(function (){
        Route::get('dashboard', 'AdminController@index')->name('admin.index');

        Route::prefix('user')->group(function(){
            Route::get('pro-file', 'UserController@profile')->name('admin.user.profile');

        });
        Route::prefix('role')->group(function(){
            Route::get('list', 'RoleController@index')->name('admin.role.list');
            Route::get('get-role-list', 'RoleController@getRoleList')->name('admin.role.getRoleList');
            Route::post('list', 'RoleController@create')->name('admin.role.create');

            Route::get('permission', 'RoleController@permission')->name('admin.role.permission');
        });
    });
});
