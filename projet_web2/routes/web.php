<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\UserController;

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

// Enregistre l'ajout d'un employé
Route::post("/employes", [DashboardController::class, 'store'])
    ->name('employes.store')
    ->middleware('auth'); 

// Affichage du formulaire de connexion si non connnecté ou affichage de la page des forfaits
Route::get("/forfaits", [ForfaitController::class, 'show'])
    ->name('forfaits.show')
    ->middleware('auth');

Route::get("/forfaits/{id}", [ForfaitController::class, 'reservation'])
    ->name('forfaits.reservation')
    ->middleware('auth');

Route::post("/forfaits/update/{id}", [ForfaitController::class, 'updateForfaits'])
    ->name('forfaits.update')
    ->middleware('auth');

Route::get("/activites", [ActiviteController::class, 'show'])
    ->name('activites.show');

Route::get("/user", [UserController::class, 'showReservation'])
    ->name('user.reservation')
    ->middleware('auth');

Route::get("/delete", [ForfaitController::class, 'delete'])
    ->name('forfaits.delete')
    ->middleware('auth');
