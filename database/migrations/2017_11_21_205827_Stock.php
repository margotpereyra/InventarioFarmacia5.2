<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Stock',function (Blueprint $table) {
            $table->increments('Id_Stock')->index();
            $table->string('Producto_Stock');
            $table->string('Cantidad_Stock');
            $table->string('Fecha_Vencimiento_Stock');
            $table->string('Fecha_Fabricacion_Stock');
            $table->string('Fecha_Compra_Stock');
            $table->string('Tipo_Stock');
            $table->string('Medida_Stock');
            $table->integer('Id_Producto')->unsigned();
            $table->timestamps();

            $table->foreign('Id_Producto')->references('Id_Producto')->on('Producto')->onDelete('cascade');
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
