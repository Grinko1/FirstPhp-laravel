<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MustBeAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->guest()) {
           
            abort(Response::HTTP_FORBIDDEN);
        }
        if (auth()->user()->email !== 'nadenka@mail.com') {
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
