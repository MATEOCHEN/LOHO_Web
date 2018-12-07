<?php

namespace App\Http\Controllers\Shopping;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Shopping\Cart_Imp;
use App\Item;

class CartController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ShoppingCart()
    {
        //需研究如何動態新增刪除資料
        $items = Session::get('cart.item', []);
        $item_id = "";
        $item_name = "無商品";
        $item_price = "0";
        $item_count = "0";
        $item_total = "0";
        if (!($items == [])) {
            foreach ($items as $item) {
                if (!($item['name'] == null)) {
                    $item_id = $item['id'];
                    $item_name = $item['name'];
                    $item_price = $item['price'];
                    $item_count = $item['count'];
                    $item_total = (double)$item_price * (double)$item_count;
                    break;
                }
            }
        }

        $item_data = ['item_id' => $item_id, 'item_name' => $item_name, "item_price" => $item_price, "item_count" => $item_count, "item_total" => $item_total];
        return view('ShoppingCart\ShoppingCart', compact('item_data'));
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

    public function deleteCart(Request $request)
    {
        $cart_imp = new Cart_Imp();
        return $cart_imp->deleteCart($request);
    }
}
