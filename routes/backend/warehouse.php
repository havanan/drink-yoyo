<?php
Route::prefix('kho-hang')->group(function(){
    Route::get('/', 'WarehouseController@index')->name('admin.warehouse.index');
    Route::get('tạo-phieu-nhap', 'WarehouseController@couponCreate')->name('admin.warehouse.coupon_create');
    Route::get('danh-sach-phieu-nhap', 'WarehouseController@listImportedCoupon')->name('admin.warehouse.list_imported_coupon');
});