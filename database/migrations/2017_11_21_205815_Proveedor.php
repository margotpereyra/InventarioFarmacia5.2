<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Proveedor',function (Blueprint $table) {
           $table->increments('Id_Proveedor');
           $table->string('Nombre_Proveedor');
           $table->string('Apellido_Proveedor');
           $table->string('Ciudad_Proveedor');
           $table->integer('Telefono_Oficina');
           $table->integer('Telefono_Celular');
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
