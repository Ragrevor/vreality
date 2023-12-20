<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;


class GameController extends Controller
{

    public function games()
    {
        $games = Game::all();
        return view('games', compact('games'));
    }

    // public function course()
    // {
    //     return view('course');
    // }

}
