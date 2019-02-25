<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contact;
class Telefono extends Model
{
   Protected $table='telefonos';
    public $timestamps=false;


    public function contacts()
    {
        return $this->belongsTo(Contact::class,'contact_id','id');
    }
}
