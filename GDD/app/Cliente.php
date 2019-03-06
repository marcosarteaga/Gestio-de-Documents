<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['Nom','Cognom', 'Email', 'Telefon', 'Direccion', 'NIF', 'Provincia', 'Localidad', 'CP'];
}
