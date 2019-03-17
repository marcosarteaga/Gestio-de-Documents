<?php

namespace App\Http\Controllers;
use App\modificar;
use Illuminate\Http\Request;
use DB;

class controllerModificar extends Controller
{
	public function index()
    {
        $documento = modificar::select('id','id_venta', 'tipo_documento', 'archivo')->get();
        return view('detalle/modificarFichero', compact('documento'));
    }


	public function modificar(Request $request, $id){
		try
		{
			$nombreFichero = $request->file('archivo')->getClientOriginalName();
			$nombreAnterior = $request->input('DocumentoNombre');
			\File::delete(public_path('descargas/public/'.$nombreAnterior));
			DB::table('documentos')->where('id',$id)->update(['archivo' =>$nombreFichero ]);
			$documento= $request->file('archivo')->storeAs('public', $nombreFichero);
			return back();
		}catch(Exception $e)
		{
			return back()->withErrors(['Error'=>'Error del servidor']);
		}
	}

	public function descargar($fichero){
		$mpdf->Output($fichero);
	}




}

