<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PncController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
//? Public
Route::get('/', function() {
    return view('welcome')->with('title', 'Index');
})->name('index');
Route::get('/example', function() {
    return view('example')->with('title', 'Example');
})->name('example');

//? Guest access
Route::middleware('guest')->group(function() {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/loginAction', [LoginController::class, 'loginAction'])->name('loginAction');
});

//? Admin & Staff access
Route::middleware('auth')->group(function() {
    //* Pasien
    Route::prefix('/pasien')->group(function() {
        Route::get('/', [PasienController::class, 'index'])->name('pasien-index');
        Route::get('/create', [PasienController::class, 'create'])->name('pasien-create');
        Route::post('/create-action', [PasienController::class, 'store'])->name('pasien-create-action');
    });
    //* PNC
    Route::prefix('/pnc')->group(function() {
        Route::get('/', [PncController::class, 'index'])->name('pnc-index');
        Route::get('/create', [PncController::class, 'create'])->name('pnc-create');
        Route::post('/create-action', [PncController::class, 'store'])->name('pnc-create-action');
    });
    //* Logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

//? Admin access
Route::middleware('isAdmin')->group(function() {
    Route::prefix('users')->group(function() {
        Route::get('/', [UserController::class, 'index'])->name('user-index');
        Route::get('/create', [UserController::class, 'create'])->name('user-create');
        Route::post('/create-action', [UserController::class, 'store'])->name('user-create-action');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user-edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('user-update');
    });
});
