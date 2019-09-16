<?php
Route::prefix('user')->group(function(){
    Route::get('pro-file', 'UserController@profile')->name('admin.user.profile');
    Route::post('change-pass', 'UserController@changePass')->name('admin.user.changePass');

});