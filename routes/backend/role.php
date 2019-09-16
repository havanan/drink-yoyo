<?php
Route::prefix('role')->group(function(){
    Route::get('list', 'RoleController@index')->name('admin.role.list');
    Route::get('get-role-list', 'RoleController@getRoleList')->name('admin.role.getRoleList');
    Route::post('list', 'RoleController@create')->name('admin.role.create');

    Route::get('permission', 'RoleController@permission')->name('admin.role.permission');
});