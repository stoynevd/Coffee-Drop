<?php
Route::get('/',               'PageController@showHome');
Route::get('/new_coffeeDrop', 'PageController@showNewCoffeeDrop');

Route::get('/getNearestLocation/{postcode}',    'ActionController@getNearestLocation');
Route::post('/createNewLocation',               'ActionController@createNewLocation');
Route::post('/calculateCashback',               'ActionController@calculateCashback');
Route::get('/getLastCalculations',              'ActionController@getLastCalculations');
