<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Activite;
use App\Models\Actualite;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Affichage de la page administrateurs dans le dashboard
     *
     * @return View
     */
    public function index()
    {
<<<<<<< HEAD
        return view('dashboard.index');
    }

    /**
     * Affichage de la page des administrateurs dans le dashboard
     *
     * @return View
     */
    public function showAdmin()
    {
        $admins = User::where('role_id', 1)->paginate(4);
        $user = auth()->user();
        
        $paginatorInfo = [
            'currentPage' => $admins->currentPage(),
            'lastPage' => $admins->lastPage(),
        ];
    
        return view('dashboard.admins', compact('admins', 'paginatorInfo', 'user'));
    }
=======
        // Récupère la liste des administrateurs depuis la base de données
        $admins = User::where('role_id', 1)->get(); 
        
        // Récupère l'utilisateur connecté
        $user = auth()->user();
>>>>>>> 14f7dfa70ba242ea128dc7653b9acdc838edc31b

        return view('dashboard.index', ['admins' => $admins, 'user' => $user]);
    }
    /**
     * Affichage de la page actualités dans le dashboard
     *
     * @return View
     */
    public function showActus()
    {
        $actualites = Actualite::paginate(4);
        
        $paginatorInfo = [
            'currentPage' => $actualites->currentPage(),
            'lastPage' => $actualites->lastPage(),
        ];
    
        return view('dashboard.actualites', ['paginatorInfo' => $paginatorInfo, 'actualites' => $actualites]);
    }
    /**
     * Affichage de la page activites dans le dashboard
     *
     * @return View
     */
    public function showActivites()
    {
        $activites = Activite::paginate(4);

        $paginatorInfo = [
            'currentPage' => $activites->currentPage(),
            'lastPage' => $activites->lastPage(),
        ];

        return view('dashboard.activites', ['elements' => $activites, 'paginatorInfo' => $paginatorInfo, 'activites' => $activites]);
    }

    /**
     * Affichage de la page clients dans le dashboard
     *
     * @return View
     */
    public function showClients()
    {
        $clients = DB::table('users')
<<<<<<< HEAD
            ->join('forfaits', 'users.forfait_id', '=', 'forfaits.id')
            ->select('users.*', 'forfaits.nom as forfait_nom')
            ->where('users.role_id', 2)
            ->orderBy('users.date_achat_forfait', 'asc')
            ->paginate(10);

        $paginatorInfo = [
            'currentPage' => $clients->currentPage(),
            'lastPage' => $clients->lastPage(),
        ];

        return view('dashboard.clients', ['elements' => $clients, 'paginatorInfo' => $paginatorInfo, 'clients' => $clients]);
=======
        ->join('forfaits', 'users.forfait_id', '=', 'forfaits.id')
        ->select('users.*', 'forfaits.nom as forfait_nom')
        ->where('users.role_id', 2)
        ->orderBy('users.date_achat_forfait', 'asc')
        ->get();
    
        return view('dashboard.clients', ['clients' => $clients]);
>>>>>>> 14f7dfa70ba242ea128dc7653b9acdc838edc31b
    }
}
