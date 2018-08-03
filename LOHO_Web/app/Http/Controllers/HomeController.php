<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

         return view('Index\LOHO_Index');
    }

    public function Layout(){
        return view('Partials\Layout');
   }

   public function TestDB(){
       /*
       $pdo = DB::connection()->getPdo();
       dd($pdo);*/
    
       $scores = DB::table('score') ->get();
       
        foreach($scores as $key => $score){
            echo $key.':'.$score->chinese;
            echo'<br>';
            echo $key.':'.$score->english;
            echo'<br>';
        }
       
}

}
