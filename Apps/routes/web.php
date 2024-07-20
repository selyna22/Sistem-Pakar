<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', 'login');

// Route::view("/login", "login.index");
// Route::view("/login", "login.login");
Route::get("/login", [AuthController::class, 'index']);
Route::post("login",  [AuthController::class, 'Authenticate'])->name('login');
Route::get("/register", [AuthController::class, 'register_view']);
Route::post("/register", [AuthController::class, 'register'])->name('register');
Route::post("login",  [AuthController::class, 'Authenticate'])->name('login');
Route::get("/Logout", [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get("/user", [userController::class, 'index']);
    Route::get('/makanan', [AdminController::class, 'makanan']);
    Route::view("admin", "website.main.admin");

    Route::get('/datamakanan', [AdminController::class, 'index']);

    Route::get('/makanan', [AdminController::class, 'index'])->name('makanan.index');
    Route::get('/datapenyakit', [AdminController::class, 'datapenyakit']);
    Route::get('/datakeyakinan', [AdminController::class, 'datakeyakinan']);



    Route::get("konsultasi",  [userController::class, 'Konsultasi'])->name('konsultasi');
    Route::post("proseskonsultasi",  [userController::class, 'proseskonsultasi'])->name('konsultasi');
    Route::post("ceknilai",  [userController::class, 'ceknilai'])->name('ceknilai');

    Route::post('prosesdata', [userController::class, 'prosesdata'])->name('ceknilai');

    Route::get("/Tambahdata_makanan", [AdminController::class, 'create_makanan']);
    Route::get("/Tambahdata_penyakit", [AdminController::class, 'create_penyakit']);
    Route::get("/Tambahdata_keyakinan", [AdminController::class, 'create_keyakinan']);
    

    Route::post("/Tambahdata_makanan",  [AdminController::class, 'store_makanan'])->name('Tambahdata_makanan');
    Route::post("/Tambahdata_penyakit",  [AdminController::class, 'store_penyakit'])->name('Tambahdata_penyakit');
    Route::post("/Tambahdata_makanan",  [AdminController::class, 'store_makanan'])->name('Tambahdata_makanan');

    Route::delete('/hapus', [UserController::class, 'destroy'])->name('hapus');
    
    Route::get("/riwayat", [userController::class, 'riwayat']);
    
});
