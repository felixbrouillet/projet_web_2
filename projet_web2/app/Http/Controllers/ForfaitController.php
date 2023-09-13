<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForfaitController extends Controller
{
    public function show() {
        return view('forfaits.index');
    }
}
