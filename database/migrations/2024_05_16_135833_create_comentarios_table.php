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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->integer('ID_Comentario', true);
            $table->integer('ID_Usuario')->nullable()->index('ID_Usuario');
            $table->integer('ID_Detalle_Pedido')->nullable()->index('ID_Detalle_Pedido');
            $table->integer('Valoracion')->nullable();
            $table->text('Comentario')->nullable();
            $table->dateTime('FechaComentario')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
};
