<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Session;



class kilosmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
    {   
        
        if(Session::has('prod'))
        {
            $kilos = Session::get('prod')->kilos;            
            if($kilos > 50)
            {
                return redirect('/productos')->with('negativo','NO SE ADMITEN PRODUCTOS QUE PESAN MÁS DE 50 KILOS');
            }            
        }
         return $next($request);
    }
}
