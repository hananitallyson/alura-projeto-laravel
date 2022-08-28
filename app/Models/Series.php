<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;
    // Atributo preenchível (fillable do models eloquent) para o Mass Assingment, se algum atributo passado no array como parâmetro para o método create não estiver no array de fillable, este atributo simplesmente não será preenchido
    protected $fillable = [
        'nome'
    ];

    protected $with = [
        'seasons'
    ];

    public function seasons()
    {
        return $this->hasMany(Season::class, 'series_id');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome');
        });
    }
}
