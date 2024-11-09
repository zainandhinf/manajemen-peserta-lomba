<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function aksilogin(Request $request)
    {
        $login = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('web')->attempt($login)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('gagallogin', '')->withInput();
    }
}
