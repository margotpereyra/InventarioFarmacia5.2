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
            $table->increments('Id_Producto');
            $table->string('Codigo_Producto');
            $table->string('Nombre_Producto');
            $table->string('Categoria_Producto');
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
