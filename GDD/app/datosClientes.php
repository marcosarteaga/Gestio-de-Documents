<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datosClientes extends Model
{
	protected $table = 'clientes';
    protected $fillable = ['Nom','Cognom', 'Email', 'Telefon', 'Direccion', 'NIF', 'Provincia', 'Localidad', 'CP', 'created_at', 'updated_at'];
}
