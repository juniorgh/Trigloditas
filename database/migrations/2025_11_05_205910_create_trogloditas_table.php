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
        Schema::create('trogloditas', function (Blueprint $table) {
            $table->id();
            
            // Dados pessoais essenciais
            $table->string('foto_profissional', 255)->nullable();

            // Dados opcionais ou de verificação
            $table->string('cpf', 14)->unique()->nullable();
            $table->date('data_nascimento')->nullable();

            // Controle
            $table->enum('status', ['pendente', 'validado', 'bloqueado','verificado'])
                  ->default('pendente');
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trogloditas', function (Blueprint $table)
        {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        
        Schema::dropIfExists('trogloditas');
    }
};
