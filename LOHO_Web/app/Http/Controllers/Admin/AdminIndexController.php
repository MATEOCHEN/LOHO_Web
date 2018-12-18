<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Item;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Tail_category;

use Validator;

class AdminIndexController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function AdminIndex()
    {
         return view('Admin\AdminIndex');
    }

    public function GetCategory()
    {   
        $tail_categories = Tail_category::all();

        $tail_categories__list = array();
        
        foreach ($tail_categories as $tail_category) {
            $tmp_category = [
                'id' => $tail_category->id,
                'name' => $tail_category->Name,
            ];

            array_push($tail_categories__list,$tmp_category); 
        }


        return response()->json(['categories' => $tail_categories__list]);
    }
}
