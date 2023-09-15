<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function edit($id)
    {
        $clients = User::find($id);

        $isEdit = true;
        return view('dashboard.edit.edit-clients', ['clients' => $clients]);
    }

    public function delete($id)
    {
        $clients = User::find($id);

        if ($clients) {
            $clients->delete();
            return redirect()->route('dashboard.clients')->with('success', 'Utilisateur supprimé avec succès');
        }

        return redirect()->route('dashboard.clients')->with('error', 'Utilisateur non trouvé');
    }

}
