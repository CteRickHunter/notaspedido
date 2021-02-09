<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->biginteger('cliente_id');
            $table->date('fechaPed');
            $table->time('horaPed');
            $table->biginteger('user_id');
            $table->string('nombreUsu');
            $table->decimal('descuentoPed');
            $table->string('transportePed');
            $table->boolean('tieneDeuda');
            $table->text('notaPed');
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
        Schema::dropIfExists('pedidos');
    }
}
