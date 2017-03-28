<?php


Route::get('/', 'ProductsController@index');
Route::get('/products', 'ProductsController@index');

Route::get('/products/show/{product}', 'ProductsController@show');

Route::get('/products/create', 'ProductsController@create');
Route::post('/products', 'ProductsController@store');

Route::get('/products/{product}/edit', 'ProductsController@edit');
Route::put('/products/{product}', 'ProductsController@update');

Route::delete('/products/{product}', 'ProductsController@destroy');

?>