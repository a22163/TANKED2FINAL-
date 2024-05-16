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
        Schema::create('relaciones_decoracion_pecera', function (Blueprint $table) {
            $table->integer('ID_Relacion', true);
            $table->integer('ID_Decoracion')->nullable()->index('ID_Decoracion');
            $table->integer('ID_Pecera')->nullable()->index('ID_Pecera');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relaciones_decoracion_pecera');
    }
};
