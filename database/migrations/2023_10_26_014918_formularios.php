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
            $table->text('documento');
            $table->text('email');
            $table->text('telefone');
            $table->boolean('teve_pet');
            $table->text('possui_animal');
            $table->boolean('possui_espaco');
            $table->boolean('ficara_sozinho');
            $table->boolean('alergias');
            $table->boolean('comprometimento_saude');
            $table->boolean('avaliacao')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
