<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    
    public function dashboard()
    {
        return view(
            'admin.layout.dashboard',
            [
                "title" => "Dashboard",
                "active" => "z",
            ]
        );
    }
}
