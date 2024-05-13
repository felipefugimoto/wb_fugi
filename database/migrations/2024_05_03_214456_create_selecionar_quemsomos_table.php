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
        Schema::create('selecionar_quemsomos', function (Blueprint $table) {
            $table->id();
            // Adicione a coluna 'quemsomos_id'
            $table->unsignedBigInteger('quemsomos_id');
            $table->foreign('quemsomos_id')->references('id')->on('quem_somos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selecionar_quemsomos');
    }
};
