<?php
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

    Route::prefix('hoa-don')->group(function(){

        Route::get('danh-sach', 'HomeController@billList')->name('billList');
        Route::post('getBillInfo', 'HomeController@getBillInfo')->name('getBillInfo');
        Route::post('getBillBarcode', 'HomeController@getBillBarcode')->name('getBillBarcode');
        Route::post('getBillStaff', 'HomeController@getBillStaff')->name('getBillStaff');

    });

});