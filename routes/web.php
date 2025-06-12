<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\BokingKamarController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DetailKosController;
use App\Http\Controllers\ReservationController;


Route::get('/', function () {
    return view('dasboardUser');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

Route::middleware('auth')->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
    });

    // Route::middleware('role:user')->group(function () {
    //     Route::get('/home', [HomeController::class, 'index']);
    // });
});

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('forgotPassword', function () {
    return view('auth.forgotPassword');
})->middleware('guest')->name('password.request');

Route::post('forgotPassword', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/dataSemuaKos', [KosController::class, 'index'])->name('admin.dataSemuaKos.index');
Route::get('/dataSemuaKos/create', [KosController::class, 'create'])->name('admin.dataSemuaKos.create');
Route::post('/dataSemuaKos', [KosController::class, 'store'])->name('admin.dataSemuaKos.store');
Route::get('/dataSemuaKos/{ko}/edit', [KosController::class, 'edit'])->name('admin.dataSemuaKos.edit');
Route::put('/dataSemuaKos/{ko}', [KosController::class, 'update'])->name('admin.dataSemuaKos.update');
Route::delete('/dataSemuaKos/{ko}', [KosController::class, 'destroy'])->name('admin.dataSemuaKos.destroy');

Route::get('/detailKos', [DetailKosController::class, 'index'])->name('admin.detailKos.index');
Route::get('/detailKos/create', [DetailKosController::class, 'create'])->name('admin.detailKos.create');
Route::post('/detailKos', [DetailKosController::class, 'store'])->name('admin.detailKos.store');
Route::get('/detailKos/{detailKos}', [DetailKosController::class, 'show'])->name('admin.detailKos.show');
Route::get('/detailKos/{detailKos}/edit', [DetailKosController::class, 'edit'])->name('admin.detailKos.edit');
Route::put('/detailKos/{detailKos}', [DetailKosController::class, 'update'])->name('admin.detailKos.update');
Route::delete('/detailKos/{detailKos}', [DetailKosController::class, 'destroy'])->name('admin.detailKos.destroy');

Route::get('/accounts', [AuthController::class, 'index'])->name('accounts.index');
Route::get('/accounts/{account}', [AuthController::class, 'show'])->name('accounts.show');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home', [KosController::class, 'showForPenyewa'])->name('penyewa.home');

Route::get('/messages', [MessageController::class, 'index'])->name('admin.messages.index');
Route::post('/messages', [MessageController::class, 'store'])->name('admin.messages.store');
Route::get('/messages/{id}', [MessageController::class, 'show'])->name('admin.messages.show');
Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('admin.messages.destroy');

Route::get('/kosIbuHadi', function () {
    return view('kosIbuHadi');
});

Route::get('/kosPakBambang', function () {
    return view('kosPakBambang');
});

Route::get('/kosKaliwangi', function () {
    return view('kosKaliwangi');
});

Route::get('/kosIbuNasocha', function () {
    return view('kosIbuNasocha');
});

// Menampilkan daftar reservasi
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
// Menampilkan form untuk membuat reservasi baru
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
// Menyimpan data reservasi ke database
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
// Menampilkan detail reservasi tertentu
Route::get('/reservations/{reservation}', [ReservationController::class, 'show'])->name('reservations.show');
// Menampilkan form untuk mengedit reservasi
Route::get('/reservations/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
// Memperbarui data reservasi di database
Route::put('/reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');
// Menghapus data reservasi dari database
Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
// Download PDF untuk reservasi tertentu
Route::get('/reservations/{reservation}/download-pdf', [ReservationController::class, 'downloadPdf'])->name('reservations.download-pdf');
Route::get('/reservations/confirm/{id}', [ReservationController::class, 'confirm'])->name('reservations.confirm');

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

Route::get('/tentang', function () {
    return view('tentang');
});



