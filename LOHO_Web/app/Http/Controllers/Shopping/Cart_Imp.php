<?php
namespace App\Http\Controllers\Shopping;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Cart_Imp
{

    public function addCart(Request $request)
    {
        $cartItems = Session::get('cart.item', []);
        $current_cartItem;
        if ($cartItems == []) {
            $item = [
                'id' => $request->item_id,
                'name' => $request->item_name,
                'price' => $request->item_price,
                'count' => $request->item_count,
                'img_url' => $request->item_img_url
            ];
            $current_cartItem = $item;
            $request->session()->push('cart.item', $item);
        } else {
            foreach ($cartItems as &$cartItem) {
                if ($cartItem['name'] == $request->item_name) {
                    $cartItem['count'] += $request->item_count;
                    $current_cartItem = $cartItem;
                    $request->session()->put('cart.item', $cartItems);
                    return response()->json(array('item' => $current_cartItem));
                }
            }

            $item = [
                'id' => $request->item_id,
                'name' => $request->item_name,
                'price' => $request->item_price,
                'count' => $request->item_count,
                'img_url' => $request->item_img_url
            ];
            $current_cartItem = $item;
            $request->session()->push('cart.item', $item);
        }

        return response()->json(array('item' => $current_cartItem));
    }

    public function getCart()
    {
        $cart = Session::get('cart');
        $items = $cart['item'];

        return response()->json(['items' => $items]);
    }

    public function updateCart(Request $request)
    {   //須研究foreach及session::put
        $cartItems = Session::get('cart.item', []);
        $current_cartItem;
        foreach ($cartItems as &$cartItem) {
            if ($cartItem['name'] == $request->item_name) {
                $cartItem['count'] = $request->item_count;
                $current_cartItem = $cartItem;
                break;
            }
        }
        $request->session()->put('cart.item', $cartItems);
        return response()->json(['item' => $current_cartItem]);
    }

    public function deleteCart(Request $request)
    {   /*刪除陣列key
        $cartItems = Session::get('cart.item', []);
        $current_cartItem;
        foreach ($cartItems as $key =>  &$cartItem) {
            if ($cartItem['name'] == $request->item_name) {
                    $current_cartItem = $cartItem;
                    unset($cartItems[$key]);
                    break;
            }
        }
        Session::put('cart.item', $cartItems);
         */

        $cartItems = Session::get('cart.item', []);
        $current_cartItem;
        foreach ($cartItems as &$cartItem) {
            if ($cartItem['name'] == $request->item_name) {
                $current_cartItem = $cartItem;
                $cartItem['id'] = null;
                $cartItem['name'] = null;
                $cartItem['price'] = null;
                $cartItem['count'] = null;
                break;
            }
        }
        $request->session()->put('cart.item', $cartItems);

        return response()->json(['item' => $current_cartItem]);
    }
}