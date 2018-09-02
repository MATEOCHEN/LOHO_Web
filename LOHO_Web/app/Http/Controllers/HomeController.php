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

use Validator;
class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
         $str =' <script>alert("歡迎光臨");</script>';
         return view('Index\LOHO_Index',compact('str'));
    }

    public function addItemsToDatabase(){
        $item = new Item;

        $item->name = "socks";
        $item->price = 200;
        $item->size = 'general';
        $item->description = 'nice';
        $item->remain_count = 100;
        $item->save();
   }

   public function ManageProduct()
   {
        $item = Item::find(1);
        $id = $item->id;
        $name = $item->name;
        $price = $item->price;
        $description = $item->description;
        $remain_count = $item->remain_count;
        $img = $item->img;
        
        $data = ['img' => $img,'id' => $id,'name' => $name,'price' => $price,'description' => $description,'remain_count' => $remain_count];
        return view('Admin\ManageProduct',compact('data'));
    }

    public function upLoadFile(Request $request)
    {   

        $file = $request->file('file');
        $destinationPath = 'item_img/';
        $originalFile = $file->getClientOriginalName();
        $file->move($destinationPath, $originalFile); 

        $item = Item::find(1);
                
        $item->img = $originalFile;
        
        $item->save();
    }

   /*Blob get method
   public function ManageProduct()
   {
        $item = Item::find(1);
        $id = $item->id;
        $name = $item->name;
        $price = $item->price;
        $description = $item->description;
        $remain_count = $item->remain_count;
        $img = $item->img;
        
        $data = ['img' => $img,'id' => $id,'name' => $name,'price' => $price,'description' => $description,'remain_count' => $remain_count];
        return view('Admin\ManageProduct',compact('data'));
    }*/

    /*Blob upload method
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
                $img = file_get_contents(Input::file('file')->getRealPath());
            
                $item = Item::find(1);
                
                $item->img = $img;
                
                $item->save();
                $id = $item->id;
                $name = $item->name;
                $price = $item->price;
                $description = $item->description;
                $remain_count = $item->remain_count;
                $img = $item->img;
                
                $data = ['img' => $img,'id' => $id,'name' => $name,'price' => $price,'description' => $description,'remain_count' => $remain_count];
                return view('Admin\ManageProduct',compact('data'));
        }
        else{
            return redirect("admin")->withErrors($validator);
        }
    }*/

}
