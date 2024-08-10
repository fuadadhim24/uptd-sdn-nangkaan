<?php

use App\Http\Controllers\AcademicCalendarController;
use App\Http\Controllers\CurriculaController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PpdbInformationController;
use App\Http\Controllers\PrincipalWelcomeMessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
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
Route::get('/admin-hasil-survey/detail', function () {return view('admin.surveys.results.detail.index');})->middleware(['auth', 'verified'])->name('admin.surveys.result.detail');

Route::get('/admin-faq', [FaqController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.faq');
Route::post('/admin-faq/store', [FaqController::class, 'store'])->middleware(['auth', 'verified'])->name('faqs.store');
Route::get('/admin-faq/{faq}/edit', [FaqController::class, 'edit'])->middleware(['auth', 'verified'])->name('faqs.edit');
Route::put('/admin-faq/{faq}', [FaqController::class, 'update'])->middleware(['auth', 'verified'])->name('faqs.update');
Route::delete('/admin-faq/{faq}', [FaqController::class, 'destroy'])->middleware(['auth', 'verified'])->name('faqs.destroy');

Route::get('/admin-fasilitas', function () {return view('admin.fasilitas.index');})->middleware(['auth', 'verified'])->name('admin.fasilitas');

Route::get('/admin-informasi-ppdb', [PpdbInformationController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.ppdb');
Route::put('/admin-informasi-ppdb/{ppdbInformation}', [PpdbInformationController::class, 'update'])->name('ppdb_informations.update');


Route::get('/admin-kalender-akademik', [AcademicCalendarController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.kalender-akademik');
Route::put('/admin-kalender-akademik/{academicCalendar}', [AcademicCalendarController::class, 'update'])->name('academic_calendars.update');

Route::get('/admin-kurikulum', [CurriculaController::class,'index'])->middleware(['auth', 'verified'])->name('admin.kurikulum');
Route::put('/admin-kurikulum/{curriculum}', [CurriculaController::class, 'update'])->name('curricula.update');

Route::get('/admin-sambutan-kepala-sekolah', [PrincipalWelcomeMessageController::class,'index'])->middleware(['auth', 'verified'])->name('admin.sambutan');
Route::put('/admin-sambutan-kepala-sekolah/{principalWelcomeMessage}', [PrincipalWelcomeMessageController::class, 'update'])->name('principal_welcome_messages.update');

Route::get('/admin-daftar-guru', [TeacherController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.guru');
Route::post('/admin-daftar-guru/store', [TeacherController::class, 'store'])->middleware(['auth', 'verified'])->name('teachers.store');
Route::get('/admin-daftar-guru/{teacher}/edit', [TeacherController::class, 'edit'])->middleware(['auth', 'verified'])->name('teachers.edit');
Route::put('/admin-daftar-guru/{teacher}', [TeacherController::class, 'update'])->middleware(['auth', 'verified'])->name('teachers.update');
Route::delete('/admin-daftar-guru/{teacher}', [TeacherController::class, 'destroy'])->middleware(['auth', 'verified'])->name('teachers.destroy');

Route::get('/admin-ekstrakulikuler', function () {return view('admin.ekstrakulikuler.index');})->middleware(['auth', 'verified'])->name('admin.ekstrakulikuler');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
