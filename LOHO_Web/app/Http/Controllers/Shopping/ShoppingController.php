<?php

namespace App\Http\Controllers\Shopping;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Item;
use App\Http\Controllers\Shopping\Cart_Imp;


class ShoppingController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function BrowseItems()
    {
        $items_all = Item::all();
        $items_list = array();

        foreach ($items_all as $item) {
            $item_tmp = [
                'id' => $item->id,
                'item_id' => $item->item_id,
                'name' => $item->name,
                'price' => $item->price,
                'description' => $item->description,
                'img_url' => $item->img_url,
            ];
            array_push($items_list,$item_tmp);
        }
        $data = ['items' => $items_list];

        return view('Shopping\BrowseItems',compact('data'));
    }

    public function ShoppingItem()
    {
        return view('Shopping\ShoppingItem');
    }
<<<<<<< HEAD

    public function CheckoutList()
    {
        return view('ShoppingProcess\CheckoutList');
    }

    public function ConfirmShoppingList()
    {
        return view('ShoppingProcess\ConfirmShoppingList');
    }

    public function FillOrderList()
    {
        return view('ShoppingProcess\FillOrderList');
    }

    public function ClearOrder() 
    {
        return view('ShoppingProcess\ClearOrder');
    }

    public function FinishOrder()
    {
        return view('ShoppingProcess\FinishOrder');
    }
=======
>>>>>>> 6cb7fadc169c66ac40ffffe7586d961b7d225350
}
