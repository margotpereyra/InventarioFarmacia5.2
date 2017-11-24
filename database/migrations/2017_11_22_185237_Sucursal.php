<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sucursal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sucursal',function (Blueprint $table){
            $table->increments('Id_Sucursal')->index();
            $table->string('Nombre_Sucursla');
            $table->string('Direccion_Sucursal');
            $table->integer('Telefono');
            $table->string('Ciudad_Sucursal');
            $table->string('Provincia_Sucursal');
            $table->string('Pais_Sucursal');
            $table->integer('Id_Farmacia')->unsigned();
            $table->timestamps();

            $table->foreign('Id_Farmacia')->references('Id_Farmacia')->on('Farmacia')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
