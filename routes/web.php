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



Auth::routes();

Route::namespace('Frontend')->middleware('auth:web')->group(function (){
    Route::get('/', 'HomeController@index')->name('home');

    Route::prefix('cart')->group(function(){
        Route::post('addToCart', 'CartController@addToCart')->name('addToCart');
        Route::post('payment', 'CartController@payment')->name('payment');
        Route::post('destroyCart', 'CartController@destroyCart')->name('destroyCart');
        Route::post('disCount', 'CartController@disCount')->name('disCount');
        Route::post('remove', 'CartController@remove')->name('remove');
        Route::post('update', 'CartController@updateCart')->name('update');
        Route::get('chi-tiet-hoa-don/ma={id}', 'CartController@billView')->name('billView');

    });

});

Route::prefix('admin')->group(function() {

    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::namespace('Admin')->middleware('auth:admin')->group(function (){
        Route::get('dashboard', 'AdminController@index')->name('admin.index');

        Route::prefix('user')->group(function(){
            Route::get('pro-file', 'UserController@profile')->name('admin.user.profile');

        });
        Route::prefix('ban-hang')->group(function(){
            Route::get('tao-hoa-don', 'CartController@billCreate')->name('admin.card.billCreate');
            Route::get('menu-refresh', 'CartController@menuRefresh')->name('admin.card.menuRefresh');
            Route::get('danh-sach-ban', 'CartController@tableList')->name('admin.card.tableList');

        });
        Route::prefix('ban')->group(function(){
            Route::get('sl={sl}', 'TableController@import')->name('admin.table.import');
        });
        Route::prefix('role')->group(function(){
            Route::get('list', 'RoleController@index')->name('admin.role.list');
            Route::get('get-role-list', 'RoleController@getRoleList')->name('admin.role.getRoleList');
            Route::post('list', 'RoleController@create')->name('admin.role.create');

            Route::get('permission', 'RoleController@permission')->name('admin.role.permission');
        });
    });
});
