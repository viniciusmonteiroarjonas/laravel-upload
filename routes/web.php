<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Auth::routes();


/*
|--------------------------------------------------------------------------
| Upload Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'ClienteController@index')->name('home');
Route::get('download/{type}', 'ClienteController@download')->name('download');
Route::post('clientes/import', 'ClienteController@importExcel')->name('importa.arquivo');



Route::get('/home', 'HomeController@index')->name('home');
