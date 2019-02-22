<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    public function getClientes()
    {
        $arrayClientes = Cliente::all();
        return view('layouts.clientes',array('arrayClientes'=> $arrayClientes));
    }
}
