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
        Schema::table('mensajes_foro', function (Blueprint $table) {
            $table->foreign(['ID_Usuario'], 'mensajes_foro_ibfk_1')->references(['ID_Usuario'])->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mensajes_foro', function (Blueprint $table) {
            $table->dropForeign('mensajes_foro_ibfk_1');
        });
    }
};
