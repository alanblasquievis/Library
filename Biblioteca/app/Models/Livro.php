<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory; // Incluindo a trait HasFactory se necessário

    // Definindo os campos que podem ser preenchidos em massa
    protected $fillable = ['titulo', 'autor', 'ano_publicacao', 'ISBN', 'editora'];
}

