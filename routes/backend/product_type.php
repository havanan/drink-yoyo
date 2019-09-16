<?php
Route::prefix('loai-sp')->group(function(){
    Route::get('/', 'ProductTypeController@index')->name('admin.product_type.index');
    Route::get('getList', 'ProductTypeController@getList')->name('admin.product_type.getList');
    Route::get('sua/{id}', 'ProductTypeController@edit')->name('admin.product_type.edit');
    Route::post('cap-nhat', 'ProductTypeController@update')->name('admin.product_type.update');
    Route::post('xoa', 'ProductTypeController@delete')->name('admin.product_type.delete');

});