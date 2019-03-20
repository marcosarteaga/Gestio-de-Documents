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
        $arrayClientes = DB::table('clientes')->paginate(10);
        return view('componentes.Clientes',array('arrayClientes'=> $arrayClientes));
    }
    //mostrar ventas

    


    public function update(Request $request, $id){
        
        $cliente=Cliente::find($id);
        $infoVentas = DB::table('ventas')->select('id','nombreVentas','updated_at','Estado')->where('id_cliente', $id)->get();
        $cliente->Nom = $request->input('Nom');
                $cliente->Cognom = $request->input('Cognom');
                $cliente->Email = $request->input('Email');
                $cliente->Telefon = $request->input('Telefon');
                $cliente->Direccion = $request->input('Direccion');
                $cliente->Provincia = $request->input('Provincia');
                $cliente->Localidad = $request->input('Localidad');
                $cliente->CP = $request->input('CP');
            $cliente->save();
        return view('detalle.cliente',array('cliente'=>$cliente),array('infoVentas'=>$infoVentas));

    }

     public function editCliente($id){
        $cliente=Cliente::find($id);
        $infoVentas = DB::table('ventas')->select('id','nombreVentas','updated_at','Estado')->where('id_cliente', $id)->get();
        return view('detalle.cliente',array('cliente'=>$cliente),array('infoVentas'=>$infoVentas));

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
            //var_dump($request);
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


    public function filtro(Request $request)
    {   
        $registroBusqueda = $request->input('filtro');
        $arrayClientes = DB::table('clientes')->where('Nom','like','%'.$registroBusqueda.'%')->orwhere('Localidad','like','%'.$registroBusqueda.'%')->orwhere('NIF','like','%'.$registroBusqueda.'%')->paginate(10);
        
        return view('componentes.Clientes',array('arrayClientes'=> $arrayClientes));
    }



        public function filtrosEstadoFecha(Request $request, $id)
    {   
        $Fecha=$request->input('filtro');
        $Estado=$request->input('estado');
       
        
        if ($Fecha!="" && $Estado=="") {
            $Fecha=$request->input('filtro');
            $Estado=$request->input('estado');
            $clientes = DB::table('clientes')->where('id', $id)->get();
            $venta = ventas::select('id', 'nombreVentas','Estado','updated_at')->where('id_cliente',$id)->where('updated_at','like',$Fecha.'%')->get();
            return view('detalle.cliente',array('cliente'=>$clientes),array('infoVentas'=>$venta));
        }
        elseif ($Fecha!="" && $Estado=="") {
            $Fecha=$request->input('filtro');
            $Estado=$request->input('estado');
            $clientes = DB::table('clientes')->where('id', $id)->get();
            $venta = ventas::select('id', 'nombreVentas','Estado','updated_at')->where('id_cliente',$id)->where('Estado',$Estado)->get();
            return view('detalle.cliente',array('cliente'=>$clientes),array('infoVentas'=>$venta));
        }
        elseif ($Fecha!="" && $Estado!="") {
            $Fecha=$request->input('filtro');
            $Estado=$request->input('estado');
            $clientes = DB::table('clientes')->where('id', $id)->get();
            $venta = ventas::select('id', 'nombreVentas','Estado','updated_at')->where('id_cliente',$id)->where('updated_at','like',$Fecha.'%')->where('Estado',$Estado)->get();
            return view('detalle.cliente',array('cliente'=>$clientes),array('infoVentas'=>$venta));
        }
        $cliente=Cliente::find($id);
        $infoVentas = DB::table('ventas')->select('id','nombreVentas','updated_at','Estado')->where('id_cliente', $id)->get();
        return view('detalle.cliente',array('cliente'=>$cliente),array('infoVentas'=>$infoVentas));
       
        
    }
}
