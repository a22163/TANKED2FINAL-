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
        Schema::table('relaciones_pez_pecera', function (Blueprint $table) {
            $table->foreign(['ID_Pez'], 'relaciones_pez_pecera_ibfk_1')->references(['ID_Pez'])->on('peces');
            $table->foreign(['ID_Pecera'], 'relaciones_pez_pecera_ibfk_2')->references(['ID_Pecera'])->on('peceras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relaciones_pez_pecera', function (Blueprint $table) {
            $table->dropForeign('relaciones_pez_pecera_ibfk_1');
            $table->dropForeign('relaciones_pez_pecera_ibfk_2');
        });
    }
};
