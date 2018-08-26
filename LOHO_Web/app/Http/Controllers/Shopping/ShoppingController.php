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
        $item = [
            'name' => $request->item_name,
            'price' => $request->item_price,
            'count' => $request->item_count
          ];
          $request->session()->push('cart.item', $item);
        
        return response()->json(array('item_name'=>$item['name'],'item_price'=>$item['price'],'item_count'=>$item['count']));
    }

    public function getCart(){
        
        $cart = Session::get('cart');
        $items = $cart['item'];
        

        
        return response()->json(['items' => $items]);
    }

    public function ShoppingCart()
    {
        $item_name = Session::get('item.name', '沒有商品');
        $item_price = Session::get('item.price', '0');
        $item_count = Session::get('item.count', '0');
        $item_total = (double)$item_price*(double)$item_count;
        $item_data = ['item_name' => $item_name,"item_price" => $item_price,"item_count"  => $item_count,"item_total" => $item_total];
        return view('ShoppingCart\ShoppingCart',compact('item_data'));
    }

}
