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

use Validator;

class QueryItemsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //抓DB商品資料傳入前端
    public function getItems(Request $request)
    {    
         $items_all = Item::all()->where('category_id',$request->category_id);
         $items_list = array();
 
         foreach ($items_all as $item) {
             $item_tmp = [
                 'id' => $item->id,
                 'item_id' => $item->item_id,
                 'name' => $item->name,
                 'price' => $item->price,
                 'description' => $item->description,
                 'remain_count' => $item->remain_count,
                 'img_url' => $item->img_url,
             ];
             array_push($items_list,$item_tmp);
         }
         $data = ['items' => $items_list,'category_id' => $request->category_id];
         return response()->json(['items' => $items_list,'category_id' => $request->category_id]);
     }
}
