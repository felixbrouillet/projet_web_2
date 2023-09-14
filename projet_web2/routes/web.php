<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AdminController;

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

// Affichage du dashboard pour les admins 
Route::get("/dashboard", [DashboardController::class, 'index'])
    ->name('dashboard.index')
    ->middleware('auth', 'isClient'); 

// Enregistre l'ajout d'un admin
Route::post("/admin", [AdminController::class, 'store'])
    ->name('admin.store')
    ->middleware('auth'); 
    
// Amène au formulaire de modification
Route::get("/admin/{id}/edit", [AdminController::class, 'edit'])
    ->name('admin.edit')
    ->middleware('auth'); 

// Met à jour l'admin
Route::post("/admin/{id}/update", [AdminController::class, 'update'])
    ->name('admin.update')
    ->middleware('auth'); 
    
// Supprime l'admin voulu
Route::get("/admin/{id}/delete", [AdminController::class, 'delete'])
    ->name('admin.delete')
    ->middleware('auth'); 

// Affichage du formulaire de connexion si non connnecté ou affichage de la page des forfaits
Route::get("/forfaits", [ForfaitController::class, 'show'])
    ->name('forfaits.show')
    ->middleware('auth');

Route::get("/forfaits/{id}", [ForfaitController::class, 'reservation'])
    ->name('forfaits.reservation')
    ->middleware('auth');

Route::post("/forfaits/update/{id}", [ForfaitController::class, 'update'])
    ->name('forfaits.update')
    ->middleware('auth');

Route::get("/activites", [ActiviteController::class, 'show'])
    ->name('activites.show');

Route::get("/actualites", [ActualiteController::class, 'show'])
    ->name('actualites.show');

Route::get("/user", [UserController::class, 'showReservation'])
    ->name('user.reservation')
    ->middleware('auth');

Route::get("/delete", [ForfaitController::class, 'delete'])
    ->name('forfaits.delete')
    ->middleware('auth');

Route::get("/create", [UserController::class, 'create'])
    ->name('user.create')
    ->middleware('guest');

Route::post("/store", [UserController::class, 'store'])
    ->name('user.store')
    ->middleware('guest');
