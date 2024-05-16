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
        Schema::create('elecciones_usuario', function (Blueprint $table) {
            $table->integer('ID_Eleccion', true);
            $table->integer('ID_Usuario')->nullable()->index('ID_Usuario');
            $table->integer('ID_Pez')->nullable()->index('ID_Pez');
            $table->integer('ID_Pecera')->nullable()->index('ID_Pecera');
            $table->integer('ID_Decoracion')->nullable()->index('ID_Decoracion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elecciones_usuario');
    }
};
