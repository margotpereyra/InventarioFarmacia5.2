<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('Apellido');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Celular');
            $table->string('Rol');
            $table->integer('Id_Farmacia')->unsigned();

            $table->rememberToken();
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
        Schema::drop('users');
    }
}
