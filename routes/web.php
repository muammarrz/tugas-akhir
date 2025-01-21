<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RespondenController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/asesmen', function () {
    return view('asesmen');
});

Route::get('/asesmen', [RespondenController::class, 'asesmenList'])->name('asesmen-list');


Route::get('/dashboard/{responden_id}', [RespondenController::class, 'dashboard'])->name('dashboard');

Route::get('/edit-responden/{responden_id}', [RespondenController::class, 'editIdentitas'])->name('edit-responden');




// Langkah 1: Identitas Responden
Route::get('/identitas-responden', function () {
    return view('identitas-responden');
})->name('identitas-responden');
Route::post('/identitas-responden', [RespondenController::class, 'storeIdentitas'])->name('store-identitas');

Route::get('/kategori/sistem-elektronik/{responden_id}', function ($responden_id) {
    return view('sistem-elektronik', compact('responden_id'));
})->name('sistem-elektronik');

Route::post('/kategori/sistem-elektronik/{responden_id}', [RespondenController::class, 'storeSistemElektronik'])->name('store-sistem-elektronik');

Route::get('/kategori/tata-kelola/{responden_id}', function ($responden_id) {
    return view('tata-kelola', compact('responden_id'));
})->name('tata-kelola');

Route::post('/kategori/tata-kelola/{responden_id}', [RespondenController::class, 'storeTataKelola'])->name('store-tata-kelola');


Route::get('/kategori/pengelolaan-resiko/{responden_id}', function ($responden_id) {
    return view('pengelolaan-resiko', compact('responden_id'));
})->name('pengelolaan-resiko');

Route::post('/kategori/pengelolaan-resiko/{responden_id}', [RespondenController::class, 'storePengelolaanResiko'])->name('store-pengelolaan-resiko');

Route::get('/kategori/kerangka-kerja/{responden_id}', function ($responden_id) {
    return view('kerangka-kerja', compact('responden_id'));
})->name('kerangka-kerja');

Route::post('/kategori/kerangka-kerja/{responden_id}', [RespondenController::class, 'storeKerangkaKerja'])->name('store-kerangka-kerja');

Route::get('/kategori/pengelolaan-aset/{responden_id}', function ($responden_id) {
    return view('pengelolaan-aset', compact('responden_id'));
})->name('pengelolaan-aset');

Route::post('/kategori/pengelolaan-aset/{responden_id}', [RespondenController::class, 'storePengelolaanAset'])->name('store-pengelolaan-aset');

Route::get('/kategori/teknologi/{responden_id}', function ($responden_id) {
    return view('teknologi', compact('responden_id'));
})->name('teknologi');

Route::post('/kategori/teknologi/{responden_id}', [RespondenController::class, 'storeTeknologi'])->name('store-teknologi');

Route::get('/kategori/pdp/{responden_id}', function ($responden_id) {
    return view('pdp', compact('responden_id'));
})->name('pdp');

Route::post('/kategori/pdp/{responden_id}', [RespondenController::class, 'storePDP'])->name('store-pdp');

Route::get('/kategori/suplemen/{responden_id}', function ($responden_id) {
    return view('suplemen', compact('responden_id'));
})->name('suplemen');

Route::post('/kategori/suplemen/{responden_id}', [RespondenController::class, 'storeSuplemen'])->name('store-suplemen');
