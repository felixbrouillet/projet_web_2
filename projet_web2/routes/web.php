<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;

// Affichage de la page d'accueil
Route::get("/", [IndexController::class, 'index'])
    ->name('index');

// Affichage du formulaire de connexion
Route::get("/login", [LoginController::class, 'show'])
    ->name('login.show')
    ->middleware('guest');

// Traitement du formulaire de connexion
Route::post("/login", [LoginController::class, 'authentifier'])
    ->name('login.authentifier')
    ->middleware('guest');

// Déconnexion de l'utilisateur (nécessite que l'utilisateur soit connecté)
Route::get("/logout", [LogoutController::class, 'logout'])
    ->name('logout')
    ->middleware('auth'); 

// Affichage du dashboard pour les employés et admin
Route::get("/dashboard", [DashboardController::class, 'index'])
    ->name('dashboard.index')
    ->middleware('auth'); 
