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

    public function addCart(Request $request)
    {
        $item = [
             'id' => $request->item_id,
            'name' => $request->item_name,
            'price' => $request->item_price,
            'count' => $request->item_count
          ];
          $request->session()->push('cart.item', $item);
        
        return response()->json(array('item'=>$item));
    }

    public function getCart()
    {
        
        $cart = Session::get('cart');
        $items = $cart['item'];

        return response()->json(['items' => $items]);
    }

    public function ShoppingCart()
    {
        $cart = Session::get('cart');
        $items = $cart['item'];

        
            $item_id = $items[0]['id'];
            $item_name = $items[0]['name'];
            $item_price = $items[0]['price'];
            $item_count = $items[0]['count'];
        

        $item_total = (double)$item_price*(double)$item_count;

        $item_data = ['item_id' => $item_id,'item_name' => $item_name,"item_price" => $item_price,"item_count"  => $item_count,"item_total" => $item_total];
        return view('ShoppingCart\ShoppingCart',compact('item_data'));
    }

    public function updateCart(Request $request)
    {
        $cartItems = Session::get('cart.item', []);
        $current_cartItem;
        foreach ($cartItems as &$cartItem) {
            if ($cartItem['name'] == $request->item_name) {
                    $cartItem['count']  = $request->item_count;
                    $current_cartItem = $cartItem;
                    break;
            }
        }
        $request->session()->put('cart.item', $cartItems);
        return response()->json(['item' => $current_cartItem]);
    }
}
