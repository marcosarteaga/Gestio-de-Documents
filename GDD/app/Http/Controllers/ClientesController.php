<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    public function getClientes()
    {
        $arrayClientes = Cliente::all();
        return view('componentes.Clientes',array('arrayClientes'=> $arrayClientes));
    }
}
