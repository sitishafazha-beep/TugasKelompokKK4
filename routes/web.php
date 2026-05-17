<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

Route::middleware(['auth'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
    Route::post('/process-payment', [CustomerController::class, 'processPayment'])->name('processPayment');
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/manage-menu', [AdminController::class, 'manageMenu'])->name('admin.manage-menu');
    Route::get('/admin/transactions', [AdminController::class, 'transactions'])->name('admin.transactions');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    
});

// Rute Home
Route::get('/', function () {
    return view('welcome'); // Pastikan file welcome.blade.php ada
});

// Rute Menu
// Rute Halaman Utama (Welcome)
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class, 'index'])->name('login');
// Harus POST untuk menangani pengiriman data login
Route::post('/login', [AuthController::class, 'authenticate']); 

Route::middleware('auth')->group(function () {
    // Harus POST untuk keamanan logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/admin/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::get('/customer/dashboard', function () { return view('customer.dashboard'); })->name('customer.dashboard');
});

// Rute Dashboard Admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->name('admin.dashboard')
    ->middleware('auth');

// Rute Dashboard Customer
Route::get('/customer/dashboard', [CustomerController::class, 'index'])
    ->name('customer.dashboard')
    ->middleware('auth');

// Hapus rute register yang lama dan ganti dengan ini
Route::get('/register', function () {
    return view('register'); // Pastikan nama filenya adalah register.blade.php
})->name('register');

// Dashboard Admin
Route::get('/admin/dashboard', function () {
    $s = 12540000; // Total Penjualan
    return view('admin.dashboard', compact('s'));
})->name('admin.dashboard');

// Dashboard Customer (Halaman Baru)
Route::get('/customer/dashboard', function () {
    return view('customer.dashboard'); 
})->name('customer.dashboard');

// Fix rute processPayment yang tadi error
Route::post('/process-payment', function () {
    return back()->with('success', 'Pembayaran Berhasil!');
})->name('processPayment');

// -------------------------------------------------------------------

// Tambahkan ini di routes/web.php
Route::get('/order-now', function () {
    if (Auth::check()) {
        // Jika sudah login, langsung ke dashboard/payment
        return redirect()->route('customer.dashboard');
    }
    // Jika belum login, paksa ke halaman login
    return redirect()->route('login');
})->name('order.now');

// --- RUTE KHUSUS YANG SUDAH LOGIN ---
Route::middleware(['auth'])->group(function () {
    
    // Halaman Profile
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    // Halaman Payment
    Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
    
    // PENTING: Berdasarkan screenshot kamu, form di payment.blade.php memanggil route('processPayment')
    // Jadi namanya saya samakan menjadi 'processPayment' (bukan 'customer.processPayment')
    Route::post('/process-payment', [PaymentController::class, 'process'])->name('processPayment');
});