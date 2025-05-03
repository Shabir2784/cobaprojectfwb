<?php
use App\Http\Controllers\instrukturController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/instruktur', [instrukturController::class, 'index']);

Route::get('/instruktur/tambah', [instrukturController::class, 'tambah'])->name('instruktur.tambah');
Route::post('/instruktur/simpan', [instrukturController::class, 'simpan'])->name('instruktur.simpan');
Route::delete('/instruktur/{id}', [instrukturController::class, 'hapus'])->name('instruktur.hapus');