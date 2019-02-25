<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    Protected $table='productos';
    public $timestamps=false;
    protected $fillable = ['nombre', 'kilos'];

}
