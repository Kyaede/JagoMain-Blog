<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }
    public function registerPost(Request $request)
    {
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->save();
        // return back()->with('success', 'Register successfully');
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // Buat objek User
        $user = new User();

        // Isi properti user
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        // Simpan user ke database
        $user->save();

        // Redirect dengan pesan sukses
        return redirect()->route('login')->with('success', 'Register successfully');
    }
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            return redirect('posts')->with('success', 'Login Success');
        }
        return back()->with('error', 'Error Email or Password');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
