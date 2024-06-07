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
Route::post("loginku",  [AuthController::class, 'login'])->name('login');


Route::view("/register", "login.register");

Route::view("/home", "website.main.index");
// Route::view("/home", "website.main.content");


Route::view("admin", "website.main.admin");
Route::view("datamakanan", "website.main.datamakanan");
Route::view("datapenyakit", "website.main.datapenyakit");
// Route::view("MB", "website.main.MB");
// Route::view("MD", "website.main.MD");

Route::view("user", "website.main.user");


Route::get("konsultasi",  [userController::class, 'Konsultasi'])->name('konsultasi');
Route::post("proseskonsultasi",  [userController::class, 'proseskonsultasi'])->name('konsultasi');
Route::post("ceknilai",  [userController::class, 'ceknilai'])->name('ceknilai');

Route::post('prosesdata', [userController::class, 'prosesdata'])->name('ceknilai');