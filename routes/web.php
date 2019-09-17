<?php

Route::get('get-code', 'HomeController@getCode')->name('getCode');

Auth::routes();

require_once "frontend.php";
require_once "backend.php";


