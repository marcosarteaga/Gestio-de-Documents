<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ventas;
use App\Documentos;

class VentaController extends Controller
{
    public function showVenta($id)
    {
        $Ventas = DB::table('ventas')->where('id', $id)->get();
        return view('detalle/venta', array('Ventas'=>$Ventas));

        
    }


     public function store(Request $request, $id)
    {
        try {
            $fichero = new Documentos;
            $fichero->id_venta = $id;
            $fichero->tipo_documento = $request->input('tipo_archivo');
            $fichero->archivo = $request->file('archivo')->getClientOriginalName();
            $fichero->save();
            $nombrefichero = $request->file('archivo')->getClientOriginalName();
            $fichero->archivo = $request->file('archivo')->storeAs('public', $nombrefichero);
            
            $Ventas = DB::table('ventas')->where('id', $id)->get();
            return view('detalle/venta', array('Ventas'=>$Ventas));
        } catch (Exception $e) {
            return back()->withErrors(['Error'=>'Error del servidor']);
        }
    }

}
