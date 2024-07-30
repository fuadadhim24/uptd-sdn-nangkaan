<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');})->name('/');
Route::get('/ekstrakulikuler', function () {return view('ekstrakulikuler');})->name('ekstrakulikuler');
Route::get('/fasilitas', function () {return view('fasilitas');})->name('fasilitas');
Route::get('/guru', function () {return view('guru');})->name('guru');
Route::get('/karya-dan-aktivitas', function () {return view('karya');})->name('karya');
Route::get('/kepala-sekolah', function () {return view('sambutan-kepala-sekolah');})->name('kepala-sekolah');
Route::get('/visi-misi', function () {return view('visi-misi');})->name('visi-misi');
Route::get('/survey', function () {return view('survey');})->name('survey');
Route::get('/survey-1', function () {return view('daftar-survey.index');})->name('survey-1');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
