<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * Affiche le dashboard pour les employés et les admins
     *
     * @return View
     */
    public function index() {
        return view('dashboard.index');
    }
}
