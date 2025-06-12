<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use PDF;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
    // Validasi data pemesanan
    $validated = $request->validate([
        'name' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|email',
        'room_number' => 'required|string',
        'rental_date' => 'required|date',
        'rental_duration' => 'required|integer|min:1',
    ]);

    // Simpan data pemesanan ke dalam database
    $reservation = Reservation::create($validated);

    // Redirect ke halaman konfirmasi dengan membawa data pemesanan
    return redirect()->route('reservations.confirm', $reservation->id);
    }

    public function confirm($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.confirm', compact('reservation'));
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'room_number' => 'required',
            'rental_date' => 'required|date',
            'rental_duration' => 'required|integer',
        ]);

        $reservation->update($request->all());

        return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully.');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully.');
    }

    public function downloadPdf(Reservation $reservation)
    {
        $pdf = PDF::loadView('reservations.pdf', compact('reservation'));
        return $pdf->download('reservation-note.pdf');
    }
}
