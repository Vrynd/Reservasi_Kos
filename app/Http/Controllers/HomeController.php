<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kos;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');
        $kosList = Kos::query()
            ->when($search, function ($query, $search) {
                $query->where('nama', 'like', '%' . $search . '%')
                      ->orWhere('lokasi', 'like', '%' . $search . '%')
                      ->orWhere('harga', 'like', '%' . $search . '%');
            })
            ->get();

        return view('home', compact('kosList'));
    }
}
