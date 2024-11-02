<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credential = $request->only('username', 'password');

        $user = User::where('username', $credential['username'])->first();

        // if ($user) {
        //     dd([
        //         'id' => $user->id,
        //         'username' => $user->username,
        //         'password' => $user->password,
        //         'role' => $user->role,
        //     ]);
        // }
        if (Auth::attempt($credential)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin');
            } else {
                return redirect('/kasir');
            }
        } else {
            return redirect('/')->withErrors(['loginError' => 'Username atau password salah']);
        }
    }
}
