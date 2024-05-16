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
        Schema::create('detalles_pedido', function (Blueprint $table) {
            $table->integer('ID_Detalle', true);
            $table->integer('ID_Pedido')->nullable()->index('ID_Pedido');
            $table->integer('Cantidad')->nullable();
            $table->decimal('Precio', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_pedido');
    }
};
