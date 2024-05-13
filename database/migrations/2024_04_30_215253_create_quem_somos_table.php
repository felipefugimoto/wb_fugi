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
            $table->string('img_banner');
            $table->string('titulo_pagina');
            $table->string('titulo_banner');
            $table->string('titulo_conteudo');
            $table->text('texto_quem_somos');
            $table->string('img');
            $table->text('missao');
            $table->text('valor');
            $table->text('visao');
            $table->text('texto_secundario');
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
