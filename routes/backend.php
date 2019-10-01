<?php
Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');

    require_once "backend/auth.php";

    Route::namespace('Admin')->middleware('auth:admin')->group(function (){

//        Route::prefix('ban-hang')->group(function(){
//            Route::get('tao-hoa-don', 'CartController@billCreate')->name('admin.card.billCreate');
//            Route::get('menu-refresh', 'CartController@menuRefresh')->name('admin.card.menuRefresh');
//            Route::get('danh-sach-ban', 'CartController@tableList')->name('admin.card.tableList');
//
//        });
//        Route::prefix('ban')->group(function(){
//            Route::get('sl={sl}', 'TableController@import')->name('admin.table.import');
//        });
        require_once "backend/home.php";
        require_once "backend/user.php";
        require_once "backend/role.php";
        require_once "backend/product.php";
        require_once "backend/product_type.php";
        require_once "backend/bill.php";
        require_once "backend/report.php";
        require_once "backend/material.php";
        require_once "backend/setting.php";
        require_once "backend/warehouse.php";

    });
});
