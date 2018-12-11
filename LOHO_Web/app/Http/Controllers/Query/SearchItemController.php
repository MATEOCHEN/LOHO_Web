<?php

namespace App\Http\Controllers\Query;

use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;


class SearchItemController extends Controller
{
    public function SearchItem(Request $request) {
        $items_all = Item::where('name','like', '%' . $request->search_text . '%')->get();
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

        return view('Query\SearchItem',compact('data'));
    }
}