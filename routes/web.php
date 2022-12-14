<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\ArsipAktifController;
use App\Http\Controllers\ArsipKorespondensiController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\KodePengarsipanController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Hash;


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

// index
Route::get('/', function () {
    return view('index');
})->middleware('auth');

// index
Route::get('/home', function () {
    return view('index');
})->middleware('auth');

// index
Route::get('/aboutus', function () {
    return view('aboutus');
})->middleware('auth');

// index
Route::get('/contactus', function () {
    return view('contactus');
})->middleware('auth');

// crud utama (surat keluar/surat masuk/disposisi)
Route::get('/surat-masuk/{suratmasuk:id}/pdf', [PDFController::class, 'print_masuk'])->middleware('auth');
Route::get('/surat-keluar/{suratkeluar:id}/pdf', [PDFController::class, 'print_keluar'])->middleware('auth');
Route::get('/disposisi/{disposisi:id}/pdf', [PDFController::class, 'print_disposisi'])->middleware('auth');
Route::resource('/surat-masuk', SuratMasukController::class)->middleware('auth');
Route::resource('/surat-keluar', SuratKeluarController::class)->middleware('auth');
Route::resource('/disposisi', DisposisiController::class)->middleware('auth');

// membuat kode
Route::get('/kode', [KodePengarsipanController::class, 'index'])->middleware('auth');
Route::post('/kode', [KodePengarsipanController::class, 'store'])->middleware('auth');
Route::post('/kode/{kode:id}', [KodePengarsipanController::class, 'delete'])->middleware('auth');

// untuk arsip aktif
Route::get('/arsip-aktif', [ArsipAktifController::class, 'index'])->middleware('auth');
Route::post('/arsip-aktif', [ArsipAktifController::class, 'print'])->middleware('auth');

// untuk arsip korespondensi
Route::get('/arsip-korespondensi', [ArsipKorespondensiController::class, 'index'])->middleware('auth');
Route::post('/arsip-korespondensi', [ArsipKorespondensiController::class, 'print'])->middleware('auth');

// login dan register
Route::get("/login", [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post("/login", [LoginController::class, 'authenticate']);
Route::post("/logout", [LoginController::class, 'logout']);

// upload
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');

// test password aja
// Route::get("/password/{password}", function($password){
//     return Hash::make($password);
// });
