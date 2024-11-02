<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    public function login(Request $req)
    {
        $credential = $req->only('username', 'password');

        if (Auth::attempt($credential)) {
            //jika berhasil login, maka check rolenya
            if (Auth::user()->role == 'admin') {
                return redirect('/admin');
            } else {
                return redirect('/kasir');
            }
        } else {
            //jika gagal login, kembalikan ke halaman login
            return redirect('login');
        }
    }
}
