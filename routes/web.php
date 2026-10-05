<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () { return view('pages.dashboard'); })->name('dashboard');
Route::get('/info', function () { return view('pages.info'); })->name('info');
Route::get('/pembayaran', function () { return view('pages.pembayaran'); })->name('pembayaran');
Route::get('/status', function () { return view('pages.status'); })->name('status');
Route::get('/denda', function () { return view('pages.denda'); })->name('denda');

Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::get('/register', function () { return view('auth.register'); })->name('register');

Route::get('/reservasi', [ReservationController::class, 'index'])->name('reservasi.form');
Route::post('/reservasi/proses', [ReservationController::class, 'proses'])->name('reservasi.proses');
Route::get('/reservasi/reset', [ReservationController::class, 'reset'])->name('reservasi.reset');

