<?php
Route::prefix('san-pham')->group(function(){
    Route::get('/', 'ProductController@index')->name('admin.product.index');
    Route::get('tao-moi', 'ProductController@create')->name('admin.product.create');
    Route::post('tao-moi', 'ProductController@insert')->name('admin.product.insert');
    Route::get('get-product-list', 'ProductController@getProduct')->name('admin.product.getProduct');
    Route::get('findProductTypes/{categories_id}', 'ProductController@findProductTypes')->name('admin.product.findProductTypes');
    Route::get('getList', 'ProductController@getList')->name('admin.product.getList');

    Route::get('sua/{id}', 'ProductController@edit')->name('admin.product.edit');
    Route::post('cap-nhat', 'ProductController@update')->name('admin.product.update');
    Route::post('xoa-sp', 'ProductController@delete')->name('admin.product.delete');

});