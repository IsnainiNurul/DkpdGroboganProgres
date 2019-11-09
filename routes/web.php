<?php
Route::get('/harga','hargaController@index');
Route::post('/harga/store','hargaController@store');
Route::get('/harga/update','hargaController@updates');
Route::post('/harga/updates','hargaController@updates');
Route::get('/harga/hapus/{id}','hargaController@hapus');
Route::get('/home','homeController@homes');
Route::get('/Submenu', 'Submenucontroller@Submenu');
Route::post('/Submenu/store', 'SubmenuController@store');
Route::get('/Submenu/updates', 'SubmenuController@updates');
Route::get('/Submenu/hapus/{id}', 'SubmenuController@hapus');
Route::get('/Submenu/berita/{id}','SubmenuController@berita');
