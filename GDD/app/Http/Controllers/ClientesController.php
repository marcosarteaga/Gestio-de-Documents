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
    public function getCreateClient()
    {
        return view('componentes.formClientes');
    }
    public function showClient($id)
    {
        $cliente = Cliente::find($id);
        return view('detalle.cliente',array('cliente'=>$cliente));
    }
    public function getInsertClient()
    {
        return view('detalle.insertar');
    }
}
