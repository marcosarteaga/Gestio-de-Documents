<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ventas;
class VentaController extends Controller
{
    public function showVenta($id)
    {
        $Ventas = DB::table('ventas')->where('id', $id)->get();
        return view('detalle/venta', array('Ventas'=>$Ventas));

        
    }
}
