<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favoritos = Favorito::where('user_id', Auth::id())->with('mascota')->get();

        return view('favoritos.index', ['favoritos' => $favoritos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mascota = Mascota::findOrFail($request->mascota_id);

        $favoritoExistente = Favorito::where('user_id', Auth::id())
                                     ->where('mascota_id', $mascota->id)
                                     ->first();

        if ($favoritoExistente) {
            session()->flash('error', 'Esta mascota ya está en tus favoritos!');
        } else {
            $favorito = new Favorito;
            $favorito->user_id = Auth::id();
            $favorito->mascota_id = $mascota->id;
            $favorito->save();

            session()->flash('success', 'Mascota agregada a favoritos con éxito!');
        }

        return redirect()->route('favoritos.index');
    }
    public function destroy($mascota_id)
    {
        $favorito = Favorito::where('user_id', Auth::id())->where('mascota_id', $mascota_id)->first();

        if ($favorito) {
            $favorito->delete();
            session()->flash('success', 'Mascota eliminada de favoritos con éxito!');
        }

        return redirect()->route('favoritos.index');
    }
}
