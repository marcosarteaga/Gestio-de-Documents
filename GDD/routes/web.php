<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'ClientesController@getClientes')->name('Listado Clientes');
Route::post('/', 'ClientesController@getClientes')->name('Listado Clientes');
Route::get('componentes/formClientes','ClientesController@getCreateClient')->name('Crear Cliente');
Route::get('detalle/insertar','ClientesController@getInsertClient')->name('Insertar Cliente');
Route::get('detalle/cliente/{id}','ClientesController@showClient')->name('Mostrar client');

