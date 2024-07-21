<?php



use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/music', [HomeController::class, 'music']);
Route::get('/video', [HomeController::class, 'video']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/shop', [HomeController::class, 'shop']);


use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Auth\RegisterController;

Route::middleware(['guest'])->group(function () {
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});


// Rute untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

use App\Http\Controllers\ProfileController;

// Rute untuk halaman profil
Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth')->name('profile');







