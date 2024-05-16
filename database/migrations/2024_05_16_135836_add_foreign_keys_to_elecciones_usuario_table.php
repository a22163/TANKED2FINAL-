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
        Schema::table('elecciones_usuario', function (Blueprint $table) {
            $table->foreign(['ID_Usuario'], 'elecciones_usuario_ibfk_1')->references(['ID_Usuario'])->on('usuarios');
            $table->foreign(['ID_Pecera'], 'elecciones_usuario_ibfk_3')->references(['ID_Pecera'])->on('peceras');
            $table->foreign(['ID_Pez'], 'elecciones_usuario_ibfk_2')->references(['ID_Pez'])->on('peces');
            $table->foreign(['ID_Decoracion'], 'elecciones_usuario_ibfk_4')->references(['ID_Decoracion'])->on('decoraciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('elecciones_usuario', function (Blueprint $table) {
            $table->dropForeign('elecciones_usuario_ibfk_1');
            $table->dropForeign('elecciones_usuario_ibfk_3');
            $table->dropForeign('elecciones_usuario_ibfk_2');
            $table->dropForeign('elecciones_usuario_ibfk_4');
        });
    }
};
