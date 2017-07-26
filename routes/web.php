<?php



Route::get('/upload', 'MapsController@index');
Route::post('/import', 'MapsController@importMaps');
Route::post('/store', 'MapsController@store');
