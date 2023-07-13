<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;

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


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/produtos', [ProductController::class, 'create'])->name('product.create');
Route::get('/produtos', [ProductController::class, 'index'])->name('product.index');

Route::any('/teste', [ProductController::class, 'teste'])->name('test');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/sobre', [HomeController::class, 'about'])->name('home.about');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard_home'])->name('dashboard');
});

Route::get('/contact', [FormController::class, 'index'])->name('contact.index');

