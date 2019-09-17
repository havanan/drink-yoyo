<?php
Route::prefix('hang-hoa')->group(function(){
    Route::get('/', 'MaterialController@index')->name('admin.material.index');
    Route::get('tao-moi', 'MaterialController@create')->name('admin.material.create');
    Route::post('tao-moi', 'MaterialController@insert')->name('admin.material.insert');
    Route::get('get-list', 'MaterialController@getList')->name('admin.material.getList');
    Route::get('sua/{id}', 'MaterialController@edit')->name('admin.material.edit');
    Route::post('cap-nhat', 'MaterialController@update')->name('admin.material.update');
    Route::post('xoa', 'MaterialController@delete')->name('admin.material.delete');

    Route::get('tao-phieu-nhap', 'MaterialController@billCreate')->name('admin.material.bill_create');
    Route::post('tao-don-vi', 'MaterialController@unitCreate')->name('admin.material.unit_create');


});