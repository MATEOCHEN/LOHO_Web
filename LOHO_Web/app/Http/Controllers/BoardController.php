<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score as ScoreEloquent;
use App\Student as StudentEloquent;
use App\Student;
use Route;
use View;
use DB;

class BoardController extends Controller
{
    //
    public function getIndex(){
        return View::make('board',['scores'=>ScoreEloquent::with
        ('student')->orderByTotal()->orderBySubject()->get()]);
    }

    public function getName(){
        return Route::currentRouteAction();
    }

    public function getChinese(){
        $student = new Student;

        $student->user_id = 1;
        $student->no = 1;
        $student->tel = 123;
        $student->save();
    }

    public function getAll(){
        //$model = ScoreEloquent::where('chinese', '>', 100)->firstOrFail();
        /*
        $scores = ScoreEloquent::where('chinese', 60)
        ->orderBy('id', 'desc')
        ->take(10)
        ->get();
        
        foreach ( $scores as $score) {
            echo $score->id;
        }
        $count = ScoreEloquent::count();
        echo $count;
        */
        $Score =ScoreEloquent::find(217);

        $Score->english = 1000;
        
        $Score->save();
    }
}
