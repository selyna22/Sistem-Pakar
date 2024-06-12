<?php

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
});

Route::view("admin", "website.main.admin");
Route::view("datamakanan", "website.main.datamakanan");
Route::view("datapenyakit", "website.main.datapenyakit");



Route::get("konsultasi",  [userController::class, 'Konsultasi'])->name('konsultasi');
Route::post("proseskonsultasi",  [userController::class, 'proseskonsultasi'])->name('konsultasi');
Route::post("ceknilai",  [userController::class, 'ceknilai'])->name('ceknilai');

Route::post('prosesdata', [userController::class, 'prosesdata'])->name('ceknilai');