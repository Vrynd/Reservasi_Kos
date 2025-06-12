<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailKos;
use App\Models\KosPhoto;
use Illuminate\Support\Facades\Storage;

class DetailKosController extends Controller
{
    public function index()
    {
        $detailKos = DetailKos::with('photos', 'reviews')->get();
        return view('admin.detailKos.index', compact('detailKos'));
    }

    public function create()
    {
        return view('admin.detailKos.create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'facilities' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required|in:disewakan,sold out',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan data kos
        $detailKos = DetailKos::create($request->only('name', 'facilities', 'price', 'status'));

        // Menyimpan foto ke storage
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('kos_photos', 'public');
                // Simpan path foto di tabel KosPhoto
                KosPhoto::create([
                    'detail_kos_id' => $detailKos->id,
                    'photo_path' => $path
                ]);
            }
        }

        return redirect()->route('admin.detailKos.index')->with('success', 'Kos berhasil ditambahkan.');
    }


    public function edit(DetailKos $detailKos)
    {
        return view('admin.detailKos.edit', compact('detailKos'));
    }

    public function update(Request $request, DetailKos $detailKos)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'facilities' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required|in:disewakan,sold out',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $detailKos->update($request->only('name', 'facilities', 'price', 'status'));

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('kos_photos', 'public');
                KosPhoto::create(['detail_kos_id' => $detailKos->id, 'photo_path' => $path]);
            }
        }

        return redirect()->route('admin.detailKos.index')->with('success', 'Kos berhasil diperbarui.');
    }

    public function show(DetailKos $detailKos)
    {
        // Ambil foto yang terkait dengan kos
        $photos = $detailKos->photos;

        return view('admin.detailKos.show', compact('detailKos', 'photos'));
    }

    public function destroy(DetailKos $detailKos)
    {
        foreach ($detailKos->photos as $photo) {
            Storage::disk('public')->delete($photo->photo_path);
        }
        $detailKos->delete();

        return redirect()->route('admin.detailKos.index')->with('success', 'Kos berhasil dihapus.');
    }
}
