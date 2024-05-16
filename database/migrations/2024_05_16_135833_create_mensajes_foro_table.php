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
        Schema::create('mensajes_foro', function (Blueprint $table) {
            $table->integer('ID_Mensaje', true);
            $table->integer('ID_Usuario')->nullable()->index('ID_Usuario');
            $table->string('Titulo')->nullable();
            $table->text('Contenido')->nullable();
            $table->string('Foto')->nullable();
            $table->dateTime('FechaPublicacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes_foro');
    }
};
