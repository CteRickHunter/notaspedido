<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('codigoCli',6);
            $table->string('nombreCli',50);
            $table->string('direccionCli',50);
            $table->string('localidadCli',30);
            $table->string('provinciaCli',20);
            $table->string('codigoPostalCli',10);
            $table->string('telefonoCli',40);
            $table->string('zonaCli',4);
            $table->biginteger('user_id');
            $table->string('codFleteCli',6);
            $table->string('nombreFleteCli',30);
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
        Schema::dropIfExists('clientes');
    }
}
