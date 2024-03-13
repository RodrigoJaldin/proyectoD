<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    public function getFemaleUsersApi()
    {
        $femaleUsers = User::where('genero', 'femenino')->get();
        return response()->json($femaleUsers);
    }
}
