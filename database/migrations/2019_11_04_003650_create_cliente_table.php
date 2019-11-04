<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombres')->require();
            $table->string('Apellidos')->require();
            $table->string('Correo')->require()->unique();
            $table->string('Password')->require();
            $table->string('CC')->require();
            $table->string('Telefono')->require();
            $table->string('Ciudad')->require();
            $table->string('Barrio')->require();
            $table->string('Direccion')->require();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
