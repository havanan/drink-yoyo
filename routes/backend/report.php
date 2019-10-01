<?php
Route::prefix('bao-cao')->group(function(){
    Route::get('doanh-thu', 'ReportController@index')->name('admin.report.index');
    Route::post('get-data', 'ReportController@findData')->name('admin.report.findData');

});