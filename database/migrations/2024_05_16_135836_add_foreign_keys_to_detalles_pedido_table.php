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
        Schema::table('detalles_pedido', function (Blueprint $table) {
            $table->foreign(['ID_Pedido'], 'detalles_pedido_ibfk_1')->references(['ID_Pedido'])->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalles_pedido', function (Blueprint $table) {
            $table->dropForeign('detalles_pedido_ibfk_1');
        });
    }
};
