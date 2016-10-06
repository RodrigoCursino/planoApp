<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    public function planos ()
    {
        return $this->belongsToMany(Plano::class, 'plano_recurso','recurso_id','planos_id');
    }
}
