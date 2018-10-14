<?php

namespace App\Http\Controllers\Game;
use Illuminate\Routing\Controller as BaseController;


class GameController extends BaseController
{
    public function Hamster()
    {
        return view("Game\Hamster");
    }

    public function Card()
    {
        return view("Game\Card");
    }
}
