<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;

// Route pour afficher la page de connexion
Route::get('/', [AuthController::class, 'index'])->name('login');

// Routes d'authentification pour les utilisateurs non connectés
Route::middleware('guest')->group(function () {
    Route::get('/auth/inscription', [AuthController::class, 'inscription'])->name('auth.inscription');
    Route::post('/auth/inscription', [AuthController::class, 'store1'])->name('auth.store1');
    Route::post('/auth/login', [AuthController::class, 'handlogin'])->name('auth.handlogin');
});

// Route de déconnexion
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes protégées pour les utilisateurs connectés
Route::middleware('auth')->group(function () {
    Route::get('admin', [AppController::class, 'admin'])->name('admin');
    Route::get('joueur', [AppController::class, 'joueur'])->name('joueur');
});
