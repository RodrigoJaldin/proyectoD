<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexInvitado()
    {
        $mascotas = Mascota::all();

        return view('mascotas.indexInvitado', ['mascotas' => $mascotas]);
    }
    public function index()
    {
        $user = Auth::user();

        if ($user->genero == 'masculino') {
            $mascotas = Mascota::where('tipo', 'perro')->get();
        } else if ($user->genero == 'femenino') {
            $mascotas = Mascota::where('tipo', 'gato')->get();
        } else {
            $mascotas = Mascota::all();
        }

        return view('mascotas.index', ['mascotas' => $mascotas]);
    }
}
