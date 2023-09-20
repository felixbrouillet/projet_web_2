<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $role = Auth::user()->role->nom;

                switch ($role) {
                    case 'client':
                        return redirect()->route('index'); // Redirection vers la page d'accueil pour les clients
                    default:
                        return redirect()->route('dashboard.index'); // Redirection vers le tableau de bord pour les autres rôles
                }
            }
        }

        return $next($request);
    }
}
