<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('pets');
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('cor');
            $table->text('genero');
            $table->integer('peso')->nullable();
            $table->integer('idade');
            $table->text('tamanho');
            $table->text('descricao')->nullable();
            $table->text('castrado');
            $table->text('vacinado');
            $table->text('imagem')->nullable();
            $table->boolean('adotado')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
