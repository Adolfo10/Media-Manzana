<?php

namespace App\Bicicletas;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table="clientes";
    protected $primaryKey ="id";
    public $timestamps = false;

    public function bicicletas()
    {
        return $this->belongsToMany(bicicleta::class, "clientes_bicicletas", "clientes_id", "bicicletas_id");
    }
}
