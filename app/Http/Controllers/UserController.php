<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function showFormLogin()
    {
        return view('user.login');
    }

    function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = [
            'email' => $email,
            'password' => $password
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('home');
        } else {
            session()->flash('login_error', 'account not exist!');
            return redirect()->route('login');
        }

    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    function showFormRegister()
    {
        return view('user.register');
    }

    function register(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login');
    }
}
