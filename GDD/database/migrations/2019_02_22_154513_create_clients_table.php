<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom');
            $table->string('Cognom');
            $table->string('Email');
            $table->integer('Telefon');
            $table->string('Direccion');
            $table->string('NIF');
            $table->string('Provincia');
            $table->string('Localidad');
            $table->integer('CP');
            $table->timestamps();
        });


        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente')->unsigned();
            $table->string('Comprador');
            $table->string('nombreVentas');
            $table->timestamps();
            $table->string('Estado')->default("No Activo");
            $table->foreign('id_cliente')->references('id')->on('clientes');


        });



        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('id_venta')->unsigned();
            $table->string('tipo_documento');
            $table->string('archivo');
            $table->timestamps();
            $table->foreign('id_venta')->references('id')->on('ventas');


        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
        Schema::dropIfExists('ventas');
        Schema::dropIfExists('clientes');
    }
}
