<?php
Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');

    require_once "../routes/backend/auth.php";


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
        require_once "../routes/backend/home.php";
        require_once "../routes/backend/user.php";
        require_once "../routes/backend/role.php";
        require_once "../routes/backend/product.php";
        require_once "../routes/backend/product_type.php";
        require_once "../routes/backend/bill.php";
        require_once "../routes/backend/material.php";

    });
});
