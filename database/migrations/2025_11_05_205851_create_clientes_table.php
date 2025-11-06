<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');;
            // Dados pessoais essenciais
            $table->string('whatsapp', 20); // obrigatório para contato via WhatsApp

            // Foto para perfil / reconhecimento facial
            $table->string('foto', 255)->nullable()->comment('Caminho da foto no storage, opcional no cadastro inicial');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
            
