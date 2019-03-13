<?php

use Illuminate\Database\Seeder;

class info_temp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedVentas();
        $this->comand->info('Tabla ventas iniciada con datos');
        self::seedClientes();
        $this->comand->info('Tabla clientes iniciada con datos');
    }
    private function seedVentas(){

    }
    private function seedClientes(){
        
    }
}
