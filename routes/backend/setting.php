<?php
Route::prefix('cai-dat')->group(function(){
    Route::get('/', 'SettingController@index')->name('admin.setting.index');
    Route::get('giam-gia', 'SettingController@discount')->name('admin.setting.discount');
    Route::get('email', 'SettingController@email')->name('admin.setting.email');

});