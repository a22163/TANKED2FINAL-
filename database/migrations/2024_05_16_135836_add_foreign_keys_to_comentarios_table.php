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
        Schema::table('comentarios', function (Blueprint $table) {
            $table->foreign(['ID_Usuario'], 'comentarios_ibfk_1')->references(['ID_Usuario'])->on('usuarios');
            $table->foreign(['ID_Detalle_Pedido'], 'comentarios_ibfk_2')->references(['ID_Detalle'])->on('detalles_pedido')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            $table->dropForeign('comentarios_ibfk_1');
            $table->dropForeign('comentarios_ibfk_2');
        });
    }
};
