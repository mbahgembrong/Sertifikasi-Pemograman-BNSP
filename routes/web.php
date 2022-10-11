<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/abouts', [App\Http\Controllers\AboutController::class, 'index'])->name('abouts.index');

Route::prefix('/')->group((function () {
    Route::get('/', [App\Http\Controllers\ArsipController::class, 'index'])->name('arsips.index');
    Route::get('/create', [App\Http\Controllers\ArsipController::class, 'create'])->name('arsips.create');
    Route::post('/store', [App\Http\Controllers\ArsipController::class, 'store'])->name('arsips.store');
    Route::get('/{id}', [App\Http\Controllers\ArsipController::class, 'show'])->name('arsips.show');
    Route::get('/{id}/edit', [App\Http\Controllers\ArsipController::class, 'edit'])->name('arsips.edit');
    Route::patch('/{id}/update', [App\Http\Controllers\ArsipController::class, 'update'])->name('arsips.update');
    Route::get('/{id}/download', [App\Http\Controllers\ArsipController::class, 'download'])->name('arsips.download');
    Route::delete('/{id}/destroy', [App\Http\Controllers\ArsipController::class, 'destroy'])->name('arsips.destroy');
}));
