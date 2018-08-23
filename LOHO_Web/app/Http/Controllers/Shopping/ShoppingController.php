<?php

namespace App\Http\Controllers\Shopping;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

        $request->session()->push('item.name', $request->item_name);
        $request->session()->push('item.price', $request->item_price);
        $request->session()->push('item.count', $request->item_count);
        
        $item = $request->session()->get('item', '沒有商品');
        $item_name = $item['name'][0];
        $item_price = $item['price'][0];
        $item_count = $item['count'][0];
        
        return response()->json(array('item_name'=>$item_name,'item_price'=>$item_price,'item_count'=>$item_count));
    }

    public function getCart(){

        $item_name = Session::get('item.name', '沒有商品');
        $item_price = Session::get('item.price', '沒有價錢');
        $item_count = Session::get('item.count', '沒有數量');

        
        return response()->json(['item_name' => $item_name,'item_price' => $item_price,'item_count' => $item_count]);
    }

    
}
