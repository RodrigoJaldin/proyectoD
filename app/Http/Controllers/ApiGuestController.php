<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class ApiGuestController extends Controller
{
    //

    public function getGuest()
    {
        $guests = Guest::all();

        return response()->json($guests);
    }
}
