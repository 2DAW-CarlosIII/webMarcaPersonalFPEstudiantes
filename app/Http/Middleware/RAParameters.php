<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RAParameters
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        if($request->routeIs('*.index')) {
            abort_unless(is_callable(array($request->route()->controller::class, 'count')), 500, "It must exists a count() method in the controller.");
            $response->header('X-Total-Count', call_user_func(array($request->route()->controller, 'count')));
        }
        return $response;
    }

}
