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
        Schema::create('peceras', function (Blueprint $table) {
            $table->integer('ID_Pecera', true);
            $table->decimal('Anchura', 5)->nullable();
            $table->decimal('Altura', 5)->nullable();
            $table->string('Forma', 50)->nullable();
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
        Schema::dropIfExists('peceras');
    }
};
