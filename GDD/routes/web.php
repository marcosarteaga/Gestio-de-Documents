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
//Listar clientes
Route::get('/', 'ClientesController@getClientes')->name('Listado Clientes');
//Crear cliente
Route::get('componentes/formClientes','ClientesController@getCreateClient')->name('Crear Cliente');
Route::post('componentes/formClientes','ClientesController@saveClient')->name('Crear cliente');
//Mostrar cliente

Route::post('detalle/cliente/{id}','ClientesController@update')->name('Modificar client');
Route::get('detalle/cliente/{id}','ClientesController@editCliente')->name('Modificar client');



