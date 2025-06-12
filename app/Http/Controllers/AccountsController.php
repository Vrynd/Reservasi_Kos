<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AccountsController extends Controller
{
    public function index()
    {
        $users = User::all(); // Mengambil semua data akun
        return view('admin.accounts', compact('users'));
    }
}
