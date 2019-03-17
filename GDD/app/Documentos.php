<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    protected $table = 'documentos';
    protected $fillable = ['id_venta', 'tipo_documento', 'archivo'];

}
