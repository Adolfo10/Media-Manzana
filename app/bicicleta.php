<?php

namespace App\Bicicletas;

use Illuminate\Database\Eloquent\Model;

class bicicleta extends Model
{
    protected $table="bicicletas";
    protected $primaryKey ="id";
    public $timestamps = false;

    public function clientes()
    {
        return $this->belongsToMany(cliente::class, "clientes_bicicletas", "bicicletas_id", "clientes_id");
    }
}