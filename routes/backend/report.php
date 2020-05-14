<?php
Route::prefix('bao-cao')->group(function(){
    Route::get('doanh-thu', 'ReportController@index')->name('admin.report.index');
    Route::get('get-date-type', 'ReportController@getDateType')->name('admin.report.getDateType');
    Route::post('get-data', 'ReportController@findData')->name('admin.report.findData');
    Route::post('get-data-by-date', 'ReportController@findDataByDate')->name('admin.report.findDataByDate');
    Route::get('do-uong', 'ReportController@drink')->name('admin.report.drink');
    Route::post('find-drink', 'ReportController@findDrinkByDateType')->name('admin.report.findDrinkByDateType');

});