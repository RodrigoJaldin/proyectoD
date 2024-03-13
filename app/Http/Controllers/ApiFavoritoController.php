<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\User;
use Illuminate\Http\Request;

class ApiFavoritoController extends Controller
{
    public function getFavoriteDogsApi($id)
    {
        $user = User::findorFail($id);

        $favoriteDogs = Mascota::whereHas('favoritos', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->where('tipo', 'perro')->get();

        return response()->json($favoriteDogs);
    }
}
