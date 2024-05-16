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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('ID_Usuario', true);
            $table->string('NombreUsuario', 50)->nullable()->unique('NombreUsuario');
            $table->string('Email', 100)->nullable();
            $table->string('Contraseña', 100)->nullable();
            $table->string('Telefono', 20)->nullable();
            $table->date('FechaNacimiento')->nullable();
            $table->string('Domicilio')->nullable();
            $table->integer('ID_Rango')->nullable()->index('ID_Rango');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
