<?php

namespace App\Http\Controllers\Shopping;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
class ShoppingController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function BrowseItems(){
         return view('Shopping\BrowseItems');
    }

    public function ShoppingItem(){
        return view('Shopping\ShoppingItem');
    }

    public function addCart(Request $request){
        $item = $request->item;
        return response()->json(array('item'=>$item));
    }
}
