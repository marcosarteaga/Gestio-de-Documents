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

//Mostrar ventas
Route::get('detalle/venta/{id}','VentaController@showVenta')->name('Modificar client');
// subir fichero
Route::post('detalle/venta/{id}', 'VentaController@store');

//rutas para hacer el udpate del fichero
Route::get('detalle/modificarFichero/{id}', 'controllerModificar@index');
Route::post('detalle/modificarFichero/{id}', 'controllerModificar@modificar');


//ruta para visualizar
Route::post('detalle/venta/{fichero}', 'controllerModificar@modificar');
//ruta para la descarga del fichero
//Route::get('detalle/venta/{fichero}','controllerModificar@descargar');

Route::get('/documento/{fichero}' , 'controllerModificar@descargar');

//Crear venta
Route::get('detalle/cliente/componentes/formVentas/{id}','ClientesController@getCreateVenta')->name('Crear Venta');
Route::post('detalle/cliente/componentes/formVentas/{id}','ClientesController@saveVenta')->name('Crear Venta');