<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $fillable = [
        'objetivoEspecifico',
        'objetivoGeral', 'ano',
        'semestre'
    ];

    // essa relação e que um professor e uma disciplina pertence a este plano as varios de um para n

    // disciplina 1 para n planos
    public function disciplina()

    {
        return $this->belongsTo(disciplina::class) ;
    }


    // professor 1 para n planos
    public function professor()

    {
        return $this->belongsTo(Processor::class) ;
    }

    // tem muitos instrumentos de avaliação
    public function avaliacao ()
    {
        return $this->hasMany(Avaliacao::class);
    }

    // relação entre planos e tecnicas
    public function tecnicas ()
    {
        return $this->belongsToMany(Tecnica::class, 'plano_tecnica','plano_id', 'tecnica_id');
    }

    // relação entre planos e recursos
    public function recursos()
    {
        return $this->belongsToMany(Recurso::class, 'plano_recurso','plano_id', 'recurso_id');
    }
}
