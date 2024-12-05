<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Section::with('players')->paginate(30);
        return view('players.index', compact('players'));
    }
}