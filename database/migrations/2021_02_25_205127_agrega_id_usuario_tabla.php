<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregaIdUsuarioTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datos', function (Blueprint $table) {
            //
            $table->bigInteger('user_id');
            $table->text('nota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('datos', function (Blueprint $table) {
            //
            $table->dropColumn('user_id');
            $table->dropColumn('nota');
        });
    }
}
