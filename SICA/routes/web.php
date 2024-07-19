<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'inicio'])->name('inicio');
Route::get('/servicios', [ServicioController::class, 'servicios'])->name('servicios');
Route::get('/osmosis', [ServicioController::class, 'servicios_osmosis'])->name('osmosis')->middleware('role:usuario,admin,admin_sistema');
Route::get('/productos', function () {
    return view('productos');
})->middleware('role:usuario,admin,admin_sistema');
Route::get('/catalogos', [PDFController::class,'showPDFs'])->name('catalogos')->middleware('role:usuario,admin,admin_sistema');

Route::middleware(['auth', 'role:admin,admin_sistema'])->group(function () {
    Route::get('/subir-catalogos', function(){
        return view('subir-catalogos');
    })->name('subir.catalogos');
    Route::post('/upload.pdf', [PDFController::class,'uploadPDF'])->name('upload.pdf');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
