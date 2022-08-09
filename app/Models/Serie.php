<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    // Atributo preenchível (fillable do models eloquent) para o Mass Assingment, se algum atributo passado no array como parâmetro para o método create não estiver no array de fillable, este atributo simplesmente não será preenchido
    protected $fillable = ['nome'];
}
