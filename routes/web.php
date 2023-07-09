<?php

use App\Http\Controllers\DaftarAnimeController;
use Illuminate\Support\Facades\Route;
use App\Models\daftaranime;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});

Route::get('/daftaranime', [DaftarAnimeController::class, 'index'] );

Route::get('/rekanime', function () {
    return view('rekanime', [
        "title" => "Rekomendasi Anime"
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita"
    ]);
});

Route::get('/ost', function () {
    return view('ost', [
        "title" => "Lagu/OST"
    ]);
});
