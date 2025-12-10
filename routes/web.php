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
