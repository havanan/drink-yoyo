<?php
Route::prefix('dashboard')->group(function(){
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::post('get-data', 'AdminController@findData')->name('admin.dashboard.findData');
});