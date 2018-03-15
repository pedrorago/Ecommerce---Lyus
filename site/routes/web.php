<?php


Route::get('/','HomeController@index');
Route::get('/inicio','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('/produtos','produtosController@lojavirtual');
Route::get('/produto','produtosController@produto');
Route::get('/perfil','PerfilController@perfil');
Route::get('/checkout','CheckoutController@index');
Route::get('/sobre','SobreController@index');
Route::get('/contato','ContatoController@index');
