<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function loginUser(Request $request)
    {
        return redirect()
            ->route('home.index')
            ->with('notification', ['type' => 'success', 'message' => 'Bienvenue '.$request->username.' sur DGI PARC']);
    }
}
