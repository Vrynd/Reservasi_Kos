<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kos;
use Illuminate\Support\Facades\Storage;

class KosController extends Controller
{
    public function index()
    {
        $kosList = Kos::all();
        return view('admin.dataSemuaKos.index', compact('kosList'));
    }

    public function showForPenyewa()
    {
        $kosList = Kos::all();
        return view('home', compact('kosList'));
    }

    public function create()
    {
        return view('admin.dataSemuaKos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
        ]);

        // Upload foto
        $fotoPath = $request->file('foto')->store('kos_fotos', 'public');

        Kos::create([
            'foto' => $fotoPath,
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'harga' => $request->harga,
        ]);

        return redirect()->route('admin.dataSemuaKos.index')->with('success', 'Kos berhasil ditambahkan.');
    }

    public function edit(Kos $ko)
    {
        return view('admin.dataSemuaKos.edit', compact('ko'));
    }

    public function update(Request $request, Kos $ko)
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            Storage::disk('public')->delete($ko->foto);

            // Upload foto baru
            $fotoPath = $request->file('foto')->store('kos_fotos', 'public');
            $ko->foto = $fotoPath;
        }

        $ko->update([
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'harga' => $request->harga,
        ]);

        return redirect()->route('admin.dataSemuaKos.index')->with('success', 'Kos berhasil diperbarui.');
    }

    public function destroy(Kos $ko)
    {
        // Hapus foto
        Storage::disk('public')->delete($ko->foto);

        $ko->delete();
        return redirect()->route('admin.dataSemuaKos.index')->with('success', 'Kos berhasil dihapus.');
    }
}
