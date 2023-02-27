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
    //    $credentials = $request->only(
    //         'nomor_admin',
    //         'password_admin'
    //     );
        
    //     if (Auth::attempt($credentials)) {

    //         $request->session()->regenerate();
    //         return redirect('/edit_utama');
    //     }

        if(Auth::attempt($request->only('nomor_admin'))) {
            return redirect('/edit');
        }
        return redirect('/');

    }
}
