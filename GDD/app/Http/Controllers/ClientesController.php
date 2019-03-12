<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\ventas;
use Exception;


class ClientesController extends Controller
{
    //mostrar clientes
    public function getClientes()
    {
        $arrayClientes = Cliente::all();
        return view('componentes.Clientes',array('arrayClientes'=> $arrayClientes));
    }
    //mostrar cliente
    public function showClient($id)
    {
        $cliente = Cliente::find($id);
        return view('detalle.cliente',array('cliente'=>$cliente));
    }
<<<<<<< HEAD

    public function showVentas($id)
=======
    //vista formulario
    public function getCreateClient()
>>>>>>> ce20e078127b7920588b44f90ac5c85ff7d2808f
    {
        return view('componentes.formClientes');
    }
<<<<<<< HEAD
    
=======
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
			//$clientes = Cliente::select('id', 'Nom', 'Cognom','Email', 'Telefon', 'Direccio', 'NIF', 'Provincia','Localidad','CP')->get();
			return view('componentes.Clientes', ['arrayClientes'=>$arrayClientes]);
		}catch(Exception $e){
			return back()->withErrors(['SVError'=>'Error del servidor @Save']);		
		}
	}
>>>>>>> ce20e078127b7920588b44f90ac5c85ff7d2808f
    public function insertClient(Request $request)
    {
        Cliente::create($request->all());
        $arrayClientes = Cliente::all();
        return view('componentes.Clientes',array('arrayClientes'=> $arrayClientes));
    }

    /* preguntar a enric
    public function showVentas($id)
    {
        $venta = ventas::find($id);
        return view('detalle.cliente',array('venta'=>$venta));
    }
*/
}
