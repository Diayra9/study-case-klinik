<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash; // untuk membuat dan memeriksa kata sandi
use Illuminate\Support\Facades\Auth; // untuk mengelola autentikasi seperti login, logout

class AuthController extends Controller
{
    /*** Menampilan Login Form ***/
    public function showLoginForm()
    {
        return view('view-login');
    }

    /*** Fungsi Login ***/
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/index');
        }

        return back()->withErrors([
            'password' => 'Data yang diberikan tidak ada, silahkan cek kembali.',
        ]);
    }

    /*** Fungsi Logout ***/
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // Invalidate sesi saat ini
        $request->session()->regenerateToken(); // mencegah serangan CSRF (Cross-Site Request Forgery)
        return redirect('/');
    }

    /*** Menampilan Registration / Sign In Form ***/
    public function showRegistrationForm()
    {
        return view('view-register');
    }

    /*** Menyimpan Data dari From Sign In ke Database ***/
    public function viewRegister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // memastikan kata sandi aman
        ]);

        Auth::login($user);
        return redirect()->intended('admin/index');
    }
}