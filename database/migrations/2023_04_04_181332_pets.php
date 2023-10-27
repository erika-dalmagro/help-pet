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
            $table->text('cor')->nullable();
            $table->text('genero')->nullable();
            $table->integer('peso')->nullable();
            $table->integer('idade')->nullable();
            $table->text('tamanho')->nullable();
            $table->text('descricao')->nullable();
            $table->text('castrado')->nullable();
            $table->text('vacinado')->nullable();
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
