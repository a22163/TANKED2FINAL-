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
        Schema::create('peces', function (Blueprint $table) {
            $table->integer('ID_Pez', true);
            $table->string('Nombre', 100)->nullable();
            $table->text('Descripcion')->nullable();
            $table->text('Cuidados')->nullable();
            $table->text('Comida')->nullable();
            $table->string('Imagen')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peces');
    }
};
