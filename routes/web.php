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

Route::get('/admin-dashboard', function () {return view('admin.dashboard');})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin-daftar-survey', function () {return view('admin.surveys.index');})->middleware(['auth', 'verified'])->name('admin.surveys');
Route::get('/admin-daftar-survey/pertanyaan', function () {return view('admin.surveys.questions.index');})->middleware(['auth', 'verified'])->name('admin.question');
Route::get('/admin-hasil-survey', function () {return view('admin.surveys.results.index');})->middleware(['auth', 'verified'])->name('admin.surveys.result');
Route::get('/admin-faq', function () {return view('admin.faq.index');})->middleware(['auth', 'verified'])->name('admin.faq');
Route::get('/admin-fasilitas', function () {return view('admin.fasilitas.index');})->middleware(['auth', 'verified'])->name('admin.fasilitas');
Route::get('/admin-informasi-ppdb', function () {return view('admin.ppdb.index');})->middleware(['auth', 'verified'])->name('admin.ppdb');
Route::get('/admin-kalender-akademik', function () {return view('admin.kalender-akademik.index');})->middleware(['auth', 'verified'])->name('admin.kalender-akademik');
Route::get('/admin-kurikulum', function () {return view('admin.kurikulum.index');})->middleware(['auth', 'verified'])->name('admin.kurikulum');
Route::get('/admin-sambutan-kepala-sekolah', function () {return view('admin.sambutan.index');})->middleware(['auth', 'verified'])->name('admin.sambutan');
Route::get('/admin-daftar-guru', function () {return view('admin.guru.index');})->middleware(['auth', 'verified'])->name('admin.guru');
Route::get('/admin-ekstrakulikuler', function () {return view('admin.ekstrakulikuler.index');})->middleware(['auth', 'verified'])->name('admin.ekstrakulikuler');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
