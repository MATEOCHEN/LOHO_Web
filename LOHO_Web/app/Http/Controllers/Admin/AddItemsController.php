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

class AddItemsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //新增空商品到DB
    public function addItemsToDatabase(Request $request){
        
        $item = new Item;
        $item->category_id = $request->category_id;
        $item->item_id = $request->item_id;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->remain_count = $request->remain_count;

        /*Todo新增圖片
        $file = $request->file('file');
        $destinationPath = 'item_img/';
        $originalFile = $file->getClientOriginalName();
        $file->move($destinationPath, $originalFile);               
        $item->img_url = $destinationPath.$originalFile;
        */
        $item->save();
        $id = $item->id;
        return response()->json(['id' => $id]);
   }

}
