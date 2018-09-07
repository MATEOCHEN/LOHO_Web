<ul>
        <li><h5>目前商品(圖片大小限制為64KB, 格式限制為jpeg、png、bmp、gif等)</h5></li>
        <li>欄位編號:<span class="id">{{$item['id']}}</span><input type="button" class="btn btn-danger btn-sm modify delete" value="刪除"></li>
        <li>商品編號:<input type="text" name="item_id" id="" value="{{$item['item_id']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
        <li>商品名稱:<input type="text" name="name" id="" value="{{$item['name']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
        <li>商品價錢:<input type="text" name="price" id="" value="{{$item['price']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
        <li>商品描述:<input type="text" name="description" id="" value="{{$item['description']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
        <li>剩餘數量:<input type="text" name="remain_count" id="" value="{{$item['remain_count']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
        <li><img src="{{ asset($item['img_url']) }}" height="300" width="300"> 
            <form enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="file" />
                <input type="submit" name="submit" value="上傳" />
                <ul id="status">
                </ul>
            </form></li>  
</ul>

