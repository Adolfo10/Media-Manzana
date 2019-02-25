<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Telefono;

class Contact extends Model
{
    protected $table='contacts';
    protected $primaryKey = 'id';
    public $timestamps = false;


    public  function telefonos()
    {
        return $this->hasMany(Telefono::class,'contact_id','id');
    }

    public function carros()
    {
        return $this->belongsToMany(Carro::class,'contactos_tiene_carros','contacts_id','carros_id')->withPivot('status');
    }


}
