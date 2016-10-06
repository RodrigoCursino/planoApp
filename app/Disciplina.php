<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public $timestamps = false;
    // para proteger a disciplina
    protected $fillable = [
        'nome',
        'referenciaBasica',
        'referenciaComplementar',
        'cargaHoraria',
        'aulasTeoricas',
        'aulasPraticas',
        'aulasLaboratorio',
        'semanas'
    ];

    // relação entre Curso e disciplina no meu model 1 para n
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    // relação entre Planos e disciplina uma disciplina tem muitos planos
    public function planos() {
        return $this->hasMany(Plano::class);
    }
}
