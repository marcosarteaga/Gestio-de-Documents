<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modificar extends Model
{
    protected $table = 'documentos';
    protected $fillable = ['id_venta', 'tipo_documento', 'archivo'];
}
