<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KopiController;

// redirect root ke halaman kopi (opsional)
Route::get('/', function () {
    return redirect('/kopi');
});

Route::get('/kopi', [KopiController::class, 'index'])->name('kopi.index');
Route::get('/kopi/create', [KopiController::class, 'create'])->name('kopi.create');
Route::post('/kopi/store', [KopiController::class, 'store'])->name('kopi.store');
Route::get('/kopi/delete/{id}', [KopiController::class, 'delete'])->name('kopi.delete');

