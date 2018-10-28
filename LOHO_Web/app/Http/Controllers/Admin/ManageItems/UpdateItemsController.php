<?php

namespace App\Http\Controllers\Admin\ManageItems;

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

class UpdateItemsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //更改該欄位id下欄位值
    public function modifyDB(Request $request)
    {
        $item = Item::find($request->id);
        $field = $request->name;
        $item->$field = $request->value;
        $item->save();
        return response()->json(['name' => $field,'value' => $request->value]);
    }

        //更改該欄位id下圖片
    public function upLoadFile(Request $request)
    {   
        $input = $request->all();
        $rules = ['file' => 'required|image|between:0,64'];

        $messages = ['file.required'=>'請上傳檔案',
        'file.image'=>'請上傳圖片格式檔案( jpeg、png、bmp、gif、 或 svg)',
        'file.between'=>'圖片檔案過大，請重新上傳符合大小限制圖片'
        ];

        $validator = Validator::make($input,$rules,$messages);

        if($validator->passes())
        {
                $file = $request->file('file');
                $destinationPath = 'item_img/';
                $originalFile = $file->getClientOriginalName();
                $file->move($destinationPath, $originalFile); 
        
                $item = Item::find($request->id);
                        
                $item->img_url = $destinationPath.$originalFile;
                
                $item->save();

                return response()->json(['url'=> $item->img_url]);
        }
        else{
            return response()->json(['errors'=>$validator->errors()->all()]);
            //return response()->json($validator->messages(), Response::HTTP_BAD_REQUEST);
            //return response()->json(['error' => 'Error msg'],404); 
        }
    }

}
