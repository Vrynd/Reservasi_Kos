<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{

    public function index()
    {
    // Mengambil semua data akun dari database
    $accounts = Account::all();

    // Mengembalikan view dan membawa data akun
    return view('auth.index', compact('accounts'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $request->session()->regenerate();

            if ($user->role == "admin") {
                return redirect()->intended('/dashboard');
            }
            return redirect()->intended('/home');
        }

        toast('Email atau Password salah', 'error');
        return back()->withInput();
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:accounts',
            'password' => 'required'
        ]);


        $user = Account::create($data);

        toast('Akun berhasil dibuat', 'success');
        return redirect()->route('login');
    }

}
