<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*** Fungsi untuk menampilkan Login Form ***/
    public function showLoginForm()
    {
        return view('admin.view-login');
    }

    /*** Fungsi untuk melakukan login ***/
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Fungsi login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('index');
        }

        // Jika akun tidak terdeteksi
        return back()->withErrors([
            'password' => 'The provided data is not available, please check again.',
        ]);
    }

    /*** Fungsi untuk melakukan logout ***/
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    /*** Fungsi untuk melakukan registrasi akun baru ***/
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], // 'confirmed' akan memeriksa password_confirmation
        ]);
    
        // Membuat akun baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        Auth::login($user);
        return redirect()->intended('index');
    }    

    /*** Fungsi untuk menampilkan view/list Admin ***/
    public function viewUser(Request $request)
    {
        $users = User::get();
        return view('admin.view-user', compact('users'));
    }
}
