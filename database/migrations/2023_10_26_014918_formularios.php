<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('formularios');
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pet');
            $table->string('nome');
            $table->text('documento')->nullable();
            $table->text('email')->nullable();
            $table->text('telefone')->nullable();
            $table->boolean('teve_pet')->nullable();
            $table->text('possui_animal')->nullable();
            $table->boolean('possui_espaco')->nullable();
            $table->boolean('ficara_sozinho')->nullable();
            $table->boolean('alergias')->nullable();
            $table->boolean('comprometimento_saude')->nullable();
            $table->boolean('avaliacao')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
