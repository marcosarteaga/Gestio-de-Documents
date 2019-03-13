<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\ventas;
use App\Cliente;
class info_temp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedClientes();
        $this->command->info('Tabla clientes iniciada con datos');
        self::seedVentas();
        $this->command->info('Tabla ventas iniciada con datos');
    }
    
    
    private function newClient(){
        $nCliente = new Cliente;
        $nCliente->Nom = Str::random(10);
        $nCliente->Cognom = Str::random(10);
        $nCliente->Email = Str::random(10).'@ej.com';
        $nCliente->Telefon = rand(000000001,999999999);
        $nCliente->Direccion = Str::random(10);
        $nCliente->NIF = self::randNIF();
        $nCliente->Provincia = Str::random(10);
        $nCliente->Localidad = Str::random(10);
        $nCliente->CP = rand(00001,99999);
        return $nCliente;
    }
    function randNIF(){
    	$num = rand(1000000, 99999999);
    	$letr = Str::random(1);
    	$dni = $num.$letr;
        return $dni;
    }
    private function seedClientes(){
        DB::table('clientes')->delete();
        for ($i=0; $i < 10; $i++) { 
            $c = new Cliente;
            $c = self::newClient();
            $c->save();
        }
    }
    private function newVenta(){
        $nVenta = new ventas;
        $nVenta->id_Cliente = rand(1,10);
        $nVenta->Comprador = Str::random(10);
        $nVenta->nombreVentas = Str::random(10);
        return $nVenta; 
    }
    private function seedVentas(){
        DB::table('ventas')->delete();
        for ($i=0; $i <20; $i++) { 
            $v = new ventas;
            $v = self::newVenta();
            $v->save();
        }

    }
    
}
