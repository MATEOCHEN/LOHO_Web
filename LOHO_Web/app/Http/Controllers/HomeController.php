<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Item;
use App\User;
use Illuminate\Support\Facades\Input;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
         $str =' <script>alert("歡迎光臨");</script>';
         return view('Index\LOHO_Index',compact('str'));
    }

    public function addItemsToDatabase(){
        $item = new Item;

        $item->name = "socks";
        $item->price = 200;
        $item->size = 'general';
        $item->description = 'nice';
        $item->remain_count = 100;
        $item->save();
   }

   public function TestDB(){
       /*
       $pdo = DB::connection()->getPdo();
       dd($pdo);*/

       /*
       $scores = DB::table('score') ->get();
       
        foreach($scores as $key => $score){
            echo $key.':'.$score->chinese;
            echo'<br>';
            echo $key.':'.$score->english;
            echo'<br>';
        }*/
        $user = User::find(3);
        $img = $user->img;
        
        $data = ['img' => $img];
        return view('TestDB\TestDB',compact('data'));
    }

    public function upLoadFile()
    {
        $img = file_get_contents(Input::file('file')->getRealPath());
        
        $user = User::find(3);

        $user->img = $img;
        
        $user->save();
        
        $img = $user->img;
        
        $data = ['img' => $img];
        return view('TestDB\AfterUpload',compact('data'));
    }

}
