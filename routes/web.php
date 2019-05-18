<?php
Route::get('/', 'PageController@showHome');

Route::get('/getNearestLocation/{postcode}',    'ActionController@getNearestLocation');
Route::post('/createNewLocation',               'ActionController@createNewLocation');
Route::post('/calculateCashback',               'ActionController@calculateCashback');
