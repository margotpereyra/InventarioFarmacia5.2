<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Producto',function (Blueprint $table){
            $table->increments('Id_Producto')->index();
            $table->string('Codigo_Producto');
            $table->string('Nombre_Producto');
            $table->string('Categoria_Producto');
            $table->string('Estado_Producto');
            $table->text('Detalle_Producto');

            /// FK
            //            ID_TIPO_PRODUCTO     int(12),
            //            ID_SUCURSAL          int(12),
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
