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

    public function showVenta($id)
    {
        $Ventas = DB::table('ventas')->where('id', $id)->get();
        return view('detalle/venta', ['Ventas' => $Ventas]);

        
    }


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
			//$clientes = Cliente::select('id', 'Nom', 'Cognom','Email', 'Telefon', 'Direccio', 'NIF', 'Provincia','Localidad','CP')->get();
			return redirect('/');
		}catch(Exception $e){
			return back()->withErrors(['SVError'=>'Error del servidor @Save']);		
		}
	}
}
