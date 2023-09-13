<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Forfait;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showReservation()
    {
        // Récupère le forfait de l'utilisateur connecté
        $user = Auth::user();
        $forfait_id = $user->forfait_id;
        $forfait = null;

        // Si l'utilisateur a un forfait, récupère les détails du forfait
        if ($forfait_id !== null) {
            $forfait = Forfait::find($forfait_id);
        }

        // Envoyez toujours la variable $forfait à la vue
        return view('user.reservation', ['forfait' => $forfait]);
    }
}
