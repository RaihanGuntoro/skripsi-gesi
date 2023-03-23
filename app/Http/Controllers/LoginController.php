<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login',
            'active' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt($request->only('nomor_admin', 'password_admin'))) {
            return redirect('/edit_utama');
        }

        return redirect('/login');

        // if (Auth::attempt($request->only('nomor_admin', 'password_admin'))) {
        //     return redirect('/edit');
        // }
        // return redirect('/');
    }
}
