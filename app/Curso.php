<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    
    protected $fillable = [
        'nome', 'periodo'
    ];

    public function disciplinas() {
        return $this->hasMany(disciplina::class);
    }
}
