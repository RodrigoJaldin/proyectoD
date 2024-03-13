<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckGeneroMiddleware
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
        if (Auth::check()) {
            $user = Auth::user();
            $routeName = $request->route()->getName();

            if ($user->genero == 'masculino' && $routeName != 'mascotas.index') {
                return redirect()->route('mascotas.index');
            }

            if ($user->genero == 'femenino' && $routeName != 'mascotas.index') {
                return redirect()->route('mascotas.index');
            }
        }

        return $next($request);
    }
}
