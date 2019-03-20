<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\ventas;
use Exception;
use DB;


class ClientesController extends Controller
{
    //mostrar clientes
    public function getClientes()
    {
        $arrayClientes = Cliente::all();
        return view('componentes.Clientes',array('arrayClientes'=> $arrayClientes));
    }
    //mostrar ventas

    


    public function update(Request $request, $id){
        
        $cliente=Cliente::find($id);
        $cliente->Nom = $request->input('Nom');
                $cliente->Cognom = $request->input('Cognom');
                $cliente->Email = $request->input('Email');
                $cliente->Telefon = $request->input('Telefon');
                $cliente->Direccion = $request->input('Direccion');
                $cliente->Provincia = $request->input('Provincia');
                $cliente->Localidad = $request->input('Localidad');
                $cliente->CP = $request->input('CP');
            $cliente->save();
        return view('detalle.cliente', array('cliente'=>$cliente));

    }

    public function editCliente($id){
        $cliente=Cliente::find($id);
        return view('detalle.cliente',array('cliente'=>$cliente));

    }

    //vista formulario
    public function getCreateClient()
    {
        return view('componentes.formClientes');
    }

    

    //añadir cliente
    public function saveClient(Request $request){
		try{
			$cliente = new Cliente;
                $cliente->Nom = $request->input('Nom');
                $cliente->Cognom = $request->input('Cognom');
				$cliente->Email = $request->input('Email');
				$cliente->Telefon = $request->input('Telefon');
				$cliente->Direccion = $request->input('Direccion');
				$cliente->NIF = $request->input('NIF');
				$cliente->Provincia = $request->input('Provincia');
				$cliente->Localidad = $request->input('Localidad');
				$cliente->CP = $request->input('CP');
            $cliente->save();
            $arrayClientes = Cliente::all();
			return redirect('/');
		}catch(Exception $e){
			return back()->withErrors(['SVError'=>'Error del servidor @Save']);		
		}
    }
    //Enviar vista formulario venta
    public function getCreateVenta($id)
    {
        return view('componentes.formVentas');
    }
    //Añadir venta
    public function saveVenta(Request $request){
        //try{
            $id = $request->input('id');
            $venta = new ventas;
                $venta->id_cliente = $id;
                $venta->Comprador = $request->input('Comprador');
                $venta->nombreVentas = $request->input('nombreVenta');
                $venta->save();
            return self::editCliente($id);
        /*}catch(Exception $e){
            return back()->withErrors(['SVError'=>'Error del servidor @Save']);
        }*/
    }
}
