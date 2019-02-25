<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

//use App\Models\Carro;
use App\Contact;
use App\Producto;
use App\Telefono;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Closure;
use Illuminate\Support\Facades\Session;



class Controller extends BaseController
{
    function __construct(){
        $this->middleware('kilos',["except"=>"showprod","showproductos"]);
    }        


   function showregistro()
    {
        $title = 'Registro';
        return view('registro');
    }


    function  registro(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:12',
            'ap' => 'required|max:12',
                'am'=>'required|max:12'
        ],[
            'nom.required' => 'El campo nombre es obligatorio',
            'ap.required' => 'El campo apellido paterno es obligatorio',
            'am.required' => 'El campo apellido materno es obligatorio'
        ]);
        $contacto = new  Contact();
        $contacto->nombre=$request->input('nom');
        $contacto->apaterno=$request->input('ap');
        $contacto->amaterno=$request->input('am');
        $contacto->save();
        \Session::flash('contactos',$contacto);
        return \Redirect::back();
    }


    
 function filtrarnombre()
    {
        $contacts = Producto::all();
        $title = 'Contactos';
        return view('contactos', compact('title','contacts'));
    }




    function showregtelefono()
    {
        $contacts = Contact::all();
        $title = 'Telefonos';
        return view('asigtel', compact('title','contacts'));
    }




    function  registrartelefono(Request $r)
    {
        $r->validate([
            'idcontacto' => 'required|max:12',
            'telefono' => 'required|max:12',

        ],[
            'idcontacto.required' => 'El campo contacto es obligatorio',
            'telefono.required' => 'El campo numero es obligatorio',

        ]);
        $id=$r->input('idcontacto');
        $numero=$r->input('telefono');
        //Busca el contacto
        $con =Contact::find($id);
        //Crea telefono
        $t = new  Telefono();
        //Le asigna el numero a la propiedad telefono
        $t->telefono=$numero;
        //Guarda el telefono a travez de la relacion
        $con->telefonos()->save($t);

        \Session::flash('contactos',$con);
        return \Redirect::back();
    }


  public function consulta1()
    {
      $contacts = Contact::all()->where('nombre', '=', 'Adolfo');
        $title = 'Contactos';
        return view('consulta', compact('title','contacts'));
    }

    public function viewlogin()
    {
        return view('login');
    }


    public function Iniciarsesion()
    {        
      session_start();
      $GetUs  = $request->input("us");
      $GetPas = $request->input("pas");
      Session::put('persona', $GetUs);
      $usuario = Usuarios::where('usuario', '=', $GetUs)->where('pass', '=', $GetPas)->get()->first();            
      return redirect('/')->with("Error","Usuario y/o contraseña incorrectos");    
    }   



public function showprod()
    {
        return view('producto');
    }

    public function registrarprod(Request $r)
    {

        $prod = new Producto();
        $prod->nombre = $r->nom;
        $prod->kilos  = $r->kilos;                
        $prod->save();
        return back()->with('biens','SE REGISTRÓ CORRECTAMENTE');
        Session::put('prod', $prod);
    }

    
    
    















    public function showfacereg()
    {
        return view('face');
    }

    public function showfacebase()
    {
        return view('baseface');
    }



    public function showgooglereg()
    {
        return view('google');
    }
    
    public function showregoogle()
    {
        return view('googlereg');
    }









}// cierra controlador
