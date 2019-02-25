<?php

namespace App\Http\Middleware;
use Carbon\Carbon;
use Closure;

class login
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
      $carbon = new Carbon();
      $date = $carbon->now()->toTimeString();
      //dd($date);

      if($date > "21:36:00" && $date < "21:37:00")
      {
        return $next($request);
      }

      else
      {
        return redirect::to('/registrarClientazo');
      }
    }

}
