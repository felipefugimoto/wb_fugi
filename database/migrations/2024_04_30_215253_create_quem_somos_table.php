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
        Schema::create('quem_somos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_pagina');
            $table->string('titulo_banner');
            $table->string('titulo_conteudo');
            $table->string('texto_quem_somos');
            $table->string('img');
            $table->string('missao');
            $table->string('valor');
            $table->string('visao');
            $table->string('texto_secundario');
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
        Schema::dropIfExists('quem_somos');
    }
};
