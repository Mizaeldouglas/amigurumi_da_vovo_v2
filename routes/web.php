<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EnderecosController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdicinarDadosController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/produtos', [ProductController::class, 'create'])->name('product.create');
Route::get('/produtos', [ProductController::class, 'index'])->name('product.index');

Route::get('/', [HomeController::class, 'index',])->name('home.index');

Route::get('/sobre', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [FormController::class, 'index'])->name('contact.index');
Route::get('/todos-amigurumis', [ProductController::class, 'index'])->name('product.index');

Route::get('/footer', [HomeController::class, 'footer'])->name('footer.socialMedia');


Route::get('/dashboard', [HomeController::class, 'dashboard_home'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/adicionar-dados', [HomeController::class, 'dashboard_edit'])->middleware(['auth', 'verified'])->name('dashboard_edit');
Route::post('/dashboard/adicionar-redesSocial', [AdicinarDadosController::class, 'create'])->middleware(['auth', 'verified'])->name('dashboard.create');
Route::post('/dashboard/adicionar-enderecos', [EnderecosController::class, 'create'])->middleware(['auth', 'verified'])->name('enderecos.create');


require __DIR__ . '/auth.php';
