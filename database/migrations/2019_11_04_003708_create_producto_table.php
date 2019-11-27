<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->require();
            
            $table->integer('categoria_id')->require()->references('id')->on('categoria');
            $table->integer('tienda_id')->require()->references('id')->on('tienda');    


            $table->string('imagen');
            $table->integer('stock')->nullable();
            $table->double('precio', 8, 2)->require();
            $table->text('descripcion')->require();
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
        Schema::dropIfExists('producto');
    }
}
