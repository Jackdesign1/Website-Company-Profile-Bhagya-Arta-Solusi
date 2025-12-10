<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/layanan', function () {
    return view('pages.layanan');
})->name('layanan');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::get('/test', function () {
    return 'Laravel jalan! Halo dari Bhagya Artha.';
});

// Fallback Route (penting buat Vercel/Netlify biar semua URL forward ke Laravel, ga download file)
Route::fallback(function () {
    return view('pages.home'); // Atau redirect('home') kalau mau
});

// Route POST untuk form kontak (kalau ada backend kirim email, setup ContactController nanti)
Route::post('/kontak', function (Request $request) {
    // Simulasi kirim email (ganti dengan Mail::send() kalau udah setup)
    return redirect()->route('kontak')->with('success', 'Pesan berhasil dikirim!');
})->name('kontak.store');
