<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;



class GameController extends Controller
{
    public function Index(){

        return view('Game\Index');
    }

    public function Hamster(){

        return view('Game\Hamster');
    }

    public function Card(){

        return view('Game\Card');
    }

    public function Puzzle(){

        return view('Game\Puzzle');
    }

    public function Cups_Game(){

        return view('Game\Cups_Game');
    }
}
