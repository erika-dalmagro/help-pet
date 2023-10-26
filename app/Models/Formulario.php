<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
   protected $fillable = [
    'nome',
    'id_pet',
    'documento',
    'telefone',
    'email',
    'teve_pet',
    'possui_animal',
    'possui_espaco',
    'ficara_sozinho',
    'alergias',
    'comprometimento_saude',
    'avaliacao',
  ];
}
