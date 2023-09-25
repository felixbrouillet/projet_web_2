<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Activite;
use App\Models\Actualite;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class DashboardController extends Controller
{
    /**
     * Affichage de la page administrateurs dans le dashboard 
     *
     * @return View
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Affichage de la page des administrateurs dans le dashboard 
     *
     * @return View
     */
    public function showAdmin()
    {
        // Récupère la liste des administrateurs depuis la base de données
        $admins = User::where('role_id', 1)->get(); 
        
        // Récupère l'utilisateur connecté
        $user = auth()->user();
        
        return view('dashboard.admins', ['admins' => $admins, 'user' => $user]);
    }

    /**
     * Affichage de la page actualités dans le dashboard 
     *
     * @return View
     */
    public function showActus()
    {
        // Récupère la liste des actualites depuis la base de données
        $actualites = Actualite::all();
        
        return view('dashboard.actualites', ['actualites' => $actualites]);
    }

    /**
     * Affichage de la page activites dans le dashboard 
     *
     * @return View
     */
    public function showActivites()
    {
        // Récupère la liste des activités depuis la base de données
        $activites = Activite::all();
        
        return view('dashboard.activites', ['activites' => $activites]);
    }

    /**
     * Affichage de la page clients dans le dashboard 
     *
     * @return View
     */
    public function showClients()
    {
        // Récupère la liste des clients avec leurs forfaits triés par date d'achat de forfait
        $clients = DB::table('users')
        ->join('forfaits', 'users.forfait_id', '=', 'forfaits.id')
        ->select('users.*', 'forfaits.nom as forfait_nom')
        ->where('users.role_id', 2)
        ->orderBy('users.date_achat_forfait', 'asc')
        ->paginate(10);
    
        return view('dashboard.clients', ['clients' => $clients]);
    }


}
