<?php

namespace App\Http\Controllers\Shopping;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use  App\Http\Controllers\Shopping\Cart_Imp;
class ShoppingController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function BrowseItems(){
         return view('Shopping\BrowseItems');
    }

    public function ShoppingItem(){
        return view('Shopping\ShoppingItem');
    }

    public function ShoppingCart()
    {
        //需研究如何動態新增刪除資料
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

    public function addCart(Request $request)
    {   
        $cart_imp = new Cart_Imp();
        return $cart_imp->addCart($request);
    }

    public function getCart()
    {
        $cart_imp = new Cart_Imp();
        return $cart_imp->getCart();
    }

    public function updateCart(Request $request)
    {   //須研究foreach及session::put
        $cart_imp = new Cart_Imp();
        return $cart_imp->updateCart($request);
    }
}
