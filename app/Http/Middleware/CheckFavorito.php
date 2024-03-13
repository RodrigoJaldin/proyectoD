<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mascota;

class CheckFavorito
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $mascota = Mascota::find($request->mascota_id);

            if ($user->genero == 'femenino' && $mascota->tipo == 'gato') {
                return redirect()->route('mascotas.index')->with('error', 'Solo puedes agregar perros a tus favoritos.');
            }
        }

        return $next($request);
    }
}
