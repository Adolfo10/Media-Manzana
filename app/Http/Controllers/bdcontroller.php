<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;


class bdcontroller extends Controller
{
    public function verprod()
    {
        $contacts = Producto::all();
//        $title = 'Contactos';
        return view('consulta', compact('contacts'));    
    }

}
