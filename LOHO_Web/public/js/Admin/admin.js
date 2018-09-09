$(document).ready(function () {
    $('.change').click(function (e) { 
        e.preventDefault();
        var category_id = $(this).val();
        $('.category').text(category_id);
        //ajax 初始化
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "get",
            url: "AlterProduct",
            data: {category_id:category_id},
            dataType: "json",
            success: function (response) {
                $('#wrap').empty();
                for (let index = 0; index < response.items.length; index++) {
                    const item = response.items[index];
                    let src = "http://localhost/LOHO_Web/public/" + response.items[index].img_url;
                    item_text = '<ul>'+
                    '<li><h5>目前商品(圖片大小限制為64KB, 格式限制為jpeg、png、bmp、gif、 或 svg)</h5></li>'+
                    '<li>欄位編號:<span class="id">'+response.items[index].id+'</span><input type="button" class="btn btn-danger btn-sm modify delete" value="刪除"></li>'+
                    '<li>商品編號:<input type="text" name="item_id" id="" value="'+response.items[index].item_id+'"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>'+
                    '<li>商品名稱:<input type="text" name="name" id="" value="'+response.items[index].name+'"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>'+
                    '<li>商品價錢:<input type="text" name="price" id="" value="'+response.items[index].price+'"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>'+
                    '<li>商品描述:<input type="text" name="description" id="" value="'+response.items[index].description+'"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>'+
                    '<li>剩餘數量:<input type="text" name="remain_count" id="" value="'+response.items[index].remain_count+'"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>'+
                    '<li><img src="'+src+'" height="300" width="300">' +
                        '<form enctype="multipart/form-data">'+
                            '<input type="file" name="file" />'+
                            '<input type="submit" name="submit" value="上傳" />'+
                            '<ul id="status">'+
                            '</ul>'+
                        '</form></li>'+
                    '</ul>';
                 $('#wrap').append(item_text); 
                }
  
             initialize();
            }
        });
    });

});