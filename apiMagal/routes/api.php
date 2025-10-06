<?php
// routes/api.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| ROUTES D'AUTHENTIFICATION
|--------------------------------------------------------------------------
| Ces routes gèrent l'inscription, la connexion et la gestion des tokens JWT
*/

// Groupe de routes pour l'authentification
Route::prefix('auth')->group(function () {
    // Routes ouvertes (pas besoin d'être connecté)
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/test-api',function(){
        return response()->json(['message' => 'API OK']);
    });

    // Routes protégées (nécessitent un token JWT valide)
    Route::middleware('auth:api')->group(function () {
        Route::get('/profile', [AuthController::class, 'profile'])->name('auth.profile');
        Route::post('/refresh', [AuthController::class, 'refresh'])->name('auth.refresh');
        Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    });
});

// Garder la route de test des modèles (temporaire)
Route::get('/test-models', function () {
    // ... code de test de l'étape précédente
});