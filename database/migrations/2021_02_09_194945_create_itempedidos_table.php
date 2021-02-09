<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItempedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itempedidos', function (Blueprint $table) {
            $table->id();
            $table->biginteger('pedido_id');
            $table->integer('lineaItem');
            $table->biginteger('producto_id');
            $table->decimal('precioItem');
            $table->boolean('esBonificado');
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
        Schema::dropIfExists('itempedidos');
    }
}
