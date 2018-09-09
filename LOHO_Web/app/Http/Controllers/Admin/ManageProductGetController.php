<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Item;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Validator;

class ManageProductGetController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function AdminIndex()
    {
         return view('Admin\AdminIndex');
    }

       //載入後臺商品管理頁面, 抓DB商品資料傳入前端
   public function ManageProduct(Request $request)
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
        return view('Admin\ManageProduct',compact('data'));
    }
    
    public function AlterProduct(Request $request)
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
