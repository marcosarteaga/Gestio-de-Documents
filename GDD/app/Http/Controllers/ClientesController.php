<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\ventas;



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

    public function showVentas($id)
    {
        $venta = ventas::find($id);
        return view('detalle.cliente',array('venta'=>$venta));
    }
    
    public function insertClient(Request $request)
    {
        Cliente::create($request->all());
        $arrayClientes = Cliente::all();
        return view('componentes.Clientes',array('arrayClientes'=> $arrayClientes));
    }
}
