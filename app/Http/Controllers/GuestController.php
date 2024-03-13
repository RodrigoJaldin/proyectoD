<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        Guest::create(['name' => $request->name]);

        return redirect()->route('mascotas.indexInvitado');
    }
}
