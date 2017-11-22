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
            $table->string('Stock_Producto');
            $table->string('Stock_Cantidad');
            $table->string('Stock_Fecha vencimiento');
            $table->string('Stock_Fecha fabricacion');
            $table->string('Stock_Fecha compra');
            $table->string('Stock_Precio compra');
            $table->string('Stock_Precio venta');
            $table->string('Stock_Tipo');
            $table->string('Stock_Medida');
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
