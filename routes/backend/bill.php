<?php
Route::prefix('hoa-don')->group(function(){
    Route::get('/', 'BillController@index')->name('admin.bill.index');
    Route::get('deleted', 'BillController@deleted')->name('admin.bill.deleted');

    Route::get('getList', 'BillController@getList')->name('admin.bill.getList');
    Route::get('sua/{id}', 'BillController@edit')->name('admin.bill.edit');
    Route::post('cap-nhat', 'BillController@update')->name('admin.bill.update');
    Route::post('xoa', 'BillController@delete')->name('admin.bill.delete');
    Route::post('view', 'BillController@view')->name('admin.bill.view');

});