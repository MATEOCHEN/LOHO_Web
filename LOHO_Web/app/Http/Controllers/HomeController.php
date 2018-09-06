<?php

namespace App\Http\Controllers;

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
class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
         $str =' <script>alert("歡迎光臨");</script>';
         return view('Index\LOHO_Index',compact('str'));
    }

    public function addItemsToDatabase(Request $request){
        
        for ($i=0; $i < $request->count; $i++) { 
            $item = new Item;
            $item->name = "socks";
            $item->price = 200;
            $item->size = 'general';
            $item->description = 'nice';
            $item->remain_count = 100;
            $item->save();
        }
        return response()->json(['count' => $request->count]);
   }
   //載入後臺商品管理頁面, 抓DB商品資料傳入前端
   public function ManageProduct()
   {    
        $items_all = Item::all();
        $items_list = array();

        foreach ($items_all as $item) {
            $item_tmp = [
                'id' => $item->id,
                'name' => $item->name,
                'price' => $item->price,
                'description' => $item->description,
                'remain_count' => $item->remain_count,
                'img_url' => $item->img_url,
            ];
            array_push($items_list,$item_tmp);
        }
        $data = ['items' => $items_list];
        return view('Admin\ManageProduct',compact('data'));
    }

    //更改該id下圖片
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

    //更改該id下欄位值
    public function modifyDB(Request $request)
    {
        $item = Item::find($request->id);
        $field = $request->name;
        $item->$field = $request->value;
        $item->save();
        return response()->json(['name' => $field,'value' => $request->value]);
    }

}
