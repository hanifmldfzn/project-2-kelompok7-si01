<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\JatahCutiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengajuanCutiController;

use App\Models\Divisi;

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::get('/admin', [AdminController::class, 'index']);

    // Form Landing Page
    route::get('', [FormController::class, 'create']);
    route::post('store', [FormController::class, 'store']);

    // Divisi
    route::get('/admin/divisi', [DivisiController::class, 'index']);
    route::get('/admin/divisi/create', [DivisiController::class, 'create'])->middleware('admin');
    route::post('/admin/divisi/store', [DivisiController::class, 'store']);
    route::get('/admin/divisi/show/{id}', [DivisiController::class, 'show']);
    route::get('/admin/divisi/edit/{id}', [DivisiController::class, 'edit'])->middleware('admin');
    route::put('/admin/divisi/update/{id}', [DivisiController::class, 'update']);
    route::delete('/admin/divisi/destroy/{id}', [DivisiController::class, 'destroy']);

    // Pegawai
    route::get('/admin/pegawai', [PegawaiController::class, 'index']);
    route::get('/admin/pegawai/create', [PegawaiController::class, 'create'])->middleware('admin');
    route::post('/admin/pegawai/store', [PegawaiController::class, 'store']);
    route::get('/admin/pegawai/show/{id}', [PegawaiController::class, 'show']);
    route::get('/admin/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
    route::put('/admin/pegawai/update/{id}', [PegawaiController::class, 'update']);
    route::delete('/admin/pegawai/destroy/{id}', [PegawaiController::class, 'destroy']);

    // Pengajuan Cuti
    route::get('/admin/pengajuancuti', [PengajuanCutiController::class, 'index']);
    route::get('/admin/pengajuancuti/create', [PengajuanCutiController::class, 'create']);
    route::post('/admin/pengajuancuti/store', [PengajuanCutiController::class, 'store']);
    route::get('/admin/pengajuancuti/show/{id}', [PengajuanCutiController::class, 'show']);
    route::get('/admin/pengajuancuti/edit/{id}', [PengajuanCutiController::class, 'edit'])->middleware('admin');
    route::put('/admin/pengajuancuti/update/{id}', [PengajuanCutiController::class, 'update']);
    route::delete('/admin/pengajuancuti/destroy/{id}', [PengajuanCutiController::class, 'destroy']);

    // Jatah Cuti
    route::get('/admin/jatahcuti', [JatahCutiController::class, 'index']);
    route::get('/admin/jatahcuti/create', [JatahCutiController::class, 'create'])->middleware('admin');
    route::post('/admin/jatahcuti/store', [JatahCutiController::class, 'store']);
    route::get('/admin/jatahcuti/show/{id}', [JatahCutiController::class, 'show']);
    route::get('/admin/jatahcuti/edit/{id}', [JatahCutiController::class, 'edit'])->middleware('admin');
    route::put('/admin/jatahcuti/update/{id}', [JatahCutiController::class, 'update']);
    route::delete('/admin/jatahcuti/destroy/{id}', [JatahCutiController::class, 'destroy']);
});
// });

require __DIR__ . '/auth.php';
