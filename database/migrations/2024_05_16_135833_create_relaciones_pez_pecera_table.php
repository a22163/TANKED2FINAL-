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
        Schema::create('relaciones_pez_pecera', function (Blueprint $table) {
            $table->integer('ID_Relacion', true);
            $table->integer('ID_Pez')->nullable()->index('ID_Pez');
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
        Schema::dropIfExists('relaciones_pez_pecera');
    }
};
