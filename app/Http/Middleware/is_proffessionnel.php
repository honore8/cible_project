<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Evenement;

class is_proffessionnel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $id)
    {
       // if(Evenement::find($id)->categorie=='')
        return $next($request);
    }
}
