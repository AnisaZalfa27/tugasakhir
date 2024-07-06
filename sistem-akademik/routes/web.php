<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DaftardosenController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RombelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    Route::get('/daftar', [DaftarController::class, 'daftar']);
    Route::get('/program', [ProgramController::class, 'program']);
    Route::get('/daftardosen', [DaftardosenController::class, 'daftardosen']);

    Route::prefix('/dashboard/mahasiswa')->group(function () {
        Route::get('/', [MahasiswaController::class, 'index']);
        Route::get('/create', [MahasiswaController::class, 'create']);
        Route::post('/store', [MahasiswaController::class, 'store']);
        Route::get('/show/{id}', [MahasiswaController::class, 'show']);
        Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->middleware('auth','admin');
        Route::put('/update/{id}', [MahasiswaController::class, 'update'])->middleware('auth','admin');
        Route::delete('/destroy/{id}', [MahasiswaController::class, 'destroy'])->middleware('auth','admin');
    });

    Route::prefix('/dashboard/dosen')->group(function () {
        Route::get('/', [DosenController::class, 'index']);
        Route::get('/create', [DosenController::class, 'create']);
        Route::post('/store', [DosenController::class, 'store']);
        Route::get('/show/{id}', [DosenController::class, 'show']);
        Route::get('/edit/{id}', [DosenController::class, 'edit']);
        Route::put('/update/{id}', [DosenController::class, 'update']);
        Route::delete('/destroy/{id}', [DosenController::class, 'destroy']);
    });

    // Table Prodi
    Route::prefix('/dashboard/prodi')->group(function () {
        Route::get('/', [ProdiController::class, 'index']);
        Route::get('/create', [ProdiController::class, 'create']);
        Route::post('/store', [ProdiController::class, 'store']);
        Route::get('/show/{id}', [ProdiController::class, 'show']);
        Route::get('/edit/{id}', [ProdiController::class, 'edit']);
        Route::put('/update/{id}', [ProdiController::class, 'update']);
        Route::delete('/destroy/{id}', [ProdiController::class, 'destroy']);
    });

      // Table Rombel
      Route::prefix('/dashboard/rombel')->group(function () {
        Route::get('/', [RombelController::class, 'index']);
        Route::get('/create', [RombelController::class, 'create']);
        Route::post('/store', [RombelController::class, 'store']);
        Route::get('/show/{id}', [RombelController::class, 'show']);
        Route::get('/edit/{id}', [RombelController::class, 'edit']);
        Route::put('/update/{id}', [RombelController::class, 'update']);
        Route::delete('/destroy/{id}', [RombelController::class, 'destroy']);
    });



});

require __DIR__.'/auth.php';
