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
            $table->string('nombres')->require();
            $table->string('apellidos')->require();
            $table->string('correo')->require()->unique();
            $table->string('password')->require();
            $table->string('cc')->require();
            $table->string('telefono')->require();
            $table->string('ciudad')->require();
            $table->string('barrio')->require();
            $table->string('direccion')->require();
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
