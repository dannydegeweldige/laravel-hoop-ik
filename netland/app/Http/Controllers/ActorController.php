<?php

namespace App\Http\Controllers;

use App\Models\Actor;

class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::all();
        return view('acteurs.index', compact('actors'));
    }
}

