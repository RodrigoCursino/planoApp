<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnica extends Model
{
    public function planos ()
    {
        return $this->belongsToMany(Plano::class, 'plano_tecnica','tecnica_id','plano_id');
    }
}
