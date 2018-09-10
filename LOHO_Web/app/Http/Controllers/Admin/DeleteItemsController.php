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

class DeleteItemsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //刪除指定欄位id商品
    public function deleteItemsFromDatabase(Request $request)
    {
        
        $item =Item::find($request->id);
        $item->delete();
        return response()->json();
    }

}
