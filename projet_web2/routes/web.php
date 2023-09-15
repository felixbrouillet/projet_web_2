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
use App\Http\Controllers\ClientController;

// ROUTES D'AUTHENTIFICATION

// Affichage du formulaire de connexion (pour les utilisateurs non connectés)
Route::get("/login", [LoginController::class, 'show'])
    ->name('login.show')
    ->middleware('guest');

// Traitement du formulaire de connexion (pour les utilisateurs non connectés)
Route::post("/login", [LoginController::class, 'authentifier'])
    ->name('login.authentifier')
    ->middleware('guest');

// Déconnexion de l'utilisateur (nécessite que l'utilisateur soit connecté)
Route::get("/logout", [LogoutController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

// ROUTES DE DASHBOARD

// Affichage de la page admin du dashboard (nécessite une connexion et un rôle 'client')
Route::get("/dashboard", [DashboardController::class, 'index'])
    ->name('dashboard.index')
    ->middleware('auth', 'isClient');

// Affichage de la page actualités dans le dashboard (nécessite une connexion)
Route::get("/dashboard/actualites", [DashboardController::class, 'showActus'])
    ->name('dashboard.actualites')
    ->middleware('auth');

// Affichage de la page activités dans le dashboard (nécessite une connexion)
Route::get("/dashboard/activites", [DashboardController::class, 'showActivites'])
    ->name('dashboard.activites')
    ->middleware('auth');

// Affichage de la page des clients dans le dashboard (nécessite une connexion)
Route::get("/dashboard/clients", [DashboardController::class, 'showClients'])
    ->name('dashboard.clients')
    ->middleware('auth');

// ROUTES D'ADMINISTRATION

// Enregistre l'ajout d'un admin (nécessite une connexion)
Route::post("/admin", [AdminController::class, 'store'])
    ->name('admin.store')
    ->middleware('auth');

// Amène au formulaire de modification d'un admin (nécessite une connexion)
Route::get("/admin/{id}/edit", [AdminController::class, 'edit'])
    ->name('admin.edit')
    ->middleware('auth');

// Met à jour les informations d'un admin (nécessite une connexion)
Route::post("/admin/{id}/update", [AdminController::class, 'update'])
    ->name('admin.update')
    ->middleware('auth');

// Supprime un admin (nécessite une connexion)
Route::get("/admin/{id}/delete", [AdminController::class, 'delete'])
    ->name('admin.delete')
    ->middleware('auth');

// ROUTES DE GESTION DES CLIENTS

// Amène au formulaire de modification d'un client (nécessite une connexion)
Route::get("/clients/{id}/edit", [ClientController::class, 'edit'])
    ->name('clients.edit')
    ->middleware('auth');

// Met à jour les informations d'un client (nécessite une connexion)
Route::post("/clients/{id}/update", [ClientController::class, 'update'])
    ->name('clients.update')
    ->middleware('auth');

// Supprime un client (nécessite une connexion)
Route::get("/clients/{id}/delete", [ClientController::class, 'delete'])
    ->name('clients.delete')
    ->middleware('auth');

// ROUTES DE GESTION DES ACTIVITÉS

// Affichage de la page des activités publiquement (sans authentification requise)
Route::get("/activites", [ActiviteController::class, 'show'])
    ->name('activites.show');

// Affichage du formulaire de création d'une activité (nécessite une connexion)
Route::get("/activites/create", [ActiviteController::class, 'create'])
    ->name('activites.create')
    ->middleware('auth');

// Soumission du formulaire de création d'une activité (nécessite une connexion)
Route::post("/activites", [ActiviteController::class, 'store'])
    ->name('activites.store')
    ->middleware('auth');


// Amène au formulaire de modification d'une activité (nécessite une connexion)
Route::get("/activites/{id}/edit", [ActiviteController::class, 'edit'])
    ->name('activites.edit')
    ->middleware('auth');

// Met à jour les informations d'une activité (nécessite une connexion)
Route::post("/activites/{id}/update", [ActiviteController::class, 'update'])
    ->name('activites.update')
    ->middleware('auth');

// Supprime une activité (nécessite une connexion)
Route::get("/activites/{id}/delete", [ActiviteController::class, 'delete'])
    ->name('activites.delete')
    ->middleware('auth');

// ... (autres routes)

// ROUTES DE GESTION DES FORFAITS

// Affichage de la page des forfaits publiquement (sans authentification requise)
Route::get("/forfaits", [ForfaitController::class, 'show'])
    ->name('forfaits.show');

// Amène à la page de réservation d'un forfait (nécessite une connexion)
Route::get("/forfaits/{id}", [ForfaitController::class, 'reservation'])
    ->name('forfaits.reservation')
    ->middleware('auth');

// Met à jour les informations d'une réservation de forfait (nécessite une connexion)
Route::post("/forfaits/update/{id}", [ForfaitController::class, 'update'])
    ->name('forfaits.update')
    ->middleware('auth');

// Supprime une réservation de forfait (nécessite une connexion)
Route::get("/delete", [ForfaitController::class, 'delete'])
    ->name('forfaits.delete')
    ->middleware('auth');

// ... (autres routes)

// ROUTES DE GESTION DES ACTUALITÉS

// Affichage de la page des actualités publiquement (sans authentification requise)
Route::get("/actualites", [ActualiteController::class, 'show'])
    ->name('actualites.show');

// Affichage du formulaire de création d'une actualité (nécessite une connexion)
Route::get("/actualites/create", [ActualiteController::class, 'create'])
    ->name('actualites.create')
    ->middleware('auth');

// Soumission du formulaire de création d'une actualité (nécessite une connexion)
Route::post("/actualites", [ActualiteController::class, 'store'])
    ->name('actualites.store')
    ->middleware('auth');

// Amène au formulaire de modification d'une actualité (nécessite une connexion)
Route::get("/actualites/{id}/edit", [ActualiteController::class, 'edit'])
    ->name('actualites.edit')
    ->middleware('auth');

// Met à jour les informations d'une actualité (nécessite une connexion)
Route::post("/actualites/{id}/update", [ActualiteController::class, 'update'])
    ->name('actualites.update')
    ->middleware('auth');

// Supprime une actualité (nécessite une connexion)
Route::get("/actualites/{id}/delete", [ActualiteController::class, 'delete'])
    ->name('actualites.delete')
    ->middleware('auth');

// ... (autres routes)

// ROUTES DE GESTION DES UTILISATEURS

// Création d'un nouvel utilisateur (inscription) (pour les utilisateurs non connectés)
Route::get("/create", [UserController::class, 'create'])
    ->name('user.create')
    ->middleware('guest');

// Enregistrement d'un nouvel utilisateur (inscription) (pour les utilisateurs non connectés)
Route::post("/store", [UserController::class, 'store'])
    ->name('user.store')
    ->middleware('guest');

// Affichage de la page des réservations pour un utilisateur connecté
Route::get("/user", [UserController::class, 'showReservation'])
    ->name('user.reservation')
    ->middleware('auth');
