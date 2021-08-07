<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    public function servicios()
    {
        return $this->belongsTo(CategoriaServicio::class);
    }

    public function grupos()
    {
        return $this->belongsTo(CategoriaGrupo::class);
    }
}
