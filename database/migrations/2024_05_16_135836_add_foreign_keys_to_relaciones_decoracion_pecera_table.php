<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relaciones_decoracion_pecera', function (Blueprint $table) {
            $table->foreign(['ID_Decoracion'], 'relaciones_decoracion_pecera_ibfk_1')->references(['ID_Decoracion'])->on('decoraciones');
            $table->foreign(['ID_Pecera'], 'relaciones_decoracion_pecera_ibfk_2')->references(['ID_Pecera'])->on('peceras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relaciones_decoracion_pecera', function (Blueprint $table) {
            $table->dropForeign('relaciones_decoracion_pecera_ibfk_1');
            $table->dropForeign('relaciones_decoracion_pecera_ibfk_2');
        });
    }
};
