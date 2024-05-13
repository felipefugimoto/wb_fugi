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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_pagina');
            $table->string('titulo_banner');
            $table->string('titulo_conteudo');
            $table->text('texto_conteudo');
            $table->text('siteP');
            $table->text('midiasocialP');
            $table->text('marketingdigitalP');
            $table->text('siteM');
            $table->text('midiasocialM');
            $table->text('marketingdigitalM');
            $table->text('siteG');
            $table->text('midiasocialG');
            $table->text('marketingdigitalG');
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
        Schema::dropIfExists('empresas');
    }
};
