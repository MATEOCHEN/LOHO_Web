function initialize() {
    $(document).ready(function () {
        //ajax 初始化
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    //預設所有submit button都disabled
    $(':input[type="submit"]').prop('disabled', true);

    //當更改欄位值, 更改submit button active
    $(':input[type="text"]').keyup(function () {
        if ($(this).val() != '') {
            let parent_dom = $(this).parent("li");
            let submit_dom = parent_dom.children(':input[type="submit"]');
            submit_dom.prop('disabled', false);
        }
    });
    });
     //當選擇檔案按下, 上傳submit button active
     $(":input[type='file']").on("change", function (event) {
        let parent_dom = $(this).parent("form");
        let submit_dom = parent_dom.children(':input[type="submit"]');
        submit_dom.prop('disabled', false);
    })

    //ajax更改欄位值
    $('li>:input[type="submit"]').click(function (e) {
        alert("click");
        let li_dom = $(this).parent("li");
        let text_dom = li_dom.children(':input[type="text"]')
        let ul_dom = li_dom.parent('ul');
        let id_dom = ul_dom.children("li").children('span,id');
        // First way to get a value
        let dom_value = text_dom.val();
        let dom_name = text_dom.attr('name');

        $.ajax({
            type: "POST",
            url: "modifyDB",
            data: {
                name: dom_name,
                value: dom_value,
                id: id_dom.text()
            },
            dataType: "json",
            success: function (response) {
                alert('更改' + response.name + "為" + response.value);
            }
        });
        let submit_dom = li_dom.children(':input[type="submit"]');
        submit_dom.prop('disabled', true);
    });

    //ajax上傳圖片(記得要preventDefault)
    $('form').submit(function (e) {

        let li_dom = $(this).parent('li');
        let img_dom = li_dom.children('img');
        let ul_dom = li_dom.parent('ul');
        let id_dom = ul_dom.children("li").children('span,id');

        var formData = new FormData($(this)[0]);
        formData.append('id', id_dom.text());
        $.ajax({
            url: 'upload',
            data: formData,
            contentType: "charset=utf-8",
            dataType: 'json',
            async: true,
            type: 'POST',
            enctype: "multipart/form-data",
            processData: false,
            contentType: false,
            success: function (response) {

                if (response.errors != null || undefined) {
                    $('#status').empty();
                    response.errors.forEach(error => {
                        $('#status').append('<li>' + error + '</li>');
                    });
                } else {
                    $('#status').empty();
                    $('#status').append('<li>' + '圖片更新成功' + '</li>');

                    let src = "http://localhost/LOHO_Web/public/" + response.url;
                    img_dom.attr('src', src);
                }
            },
        });

        e.preventDefault();
    });
    
    //前端動態刪除商品欄
    $('.delete').click(function (e) {
        e.preventDefault();

        let ul_dom = $(this).parent('li').parent('ul');
        let id_dom = ul_dom.children("li").children('span,id');

        $.ajax({
            type: "POST",
            url: "deleteItemsFromDatabase",
            data: {
                id: id_dom.text(),
            },
            dataType: "json",
            success: function (response) {
                $(ul_dom).remove();
            }
        });
    });    
}


$(document).ready(function () {
    //載入頁面,並initialize()
    alert('Loading admin page');
    initialize();

    
    //前端增加商品欄, 必須再initialize()
    $('#addItem').click(function (e) {
        e.preventDefault();
        let item_text;
        let category_id = $('.category').text();
        
        $.ajax({
            type: "POST",
            url: "addItemsToDatabase",
            data: {
                category_id: category_id
            },
            dataType: "json",
            success: function (response) {
                item_text = '<ul>'+
                '<li><h5>目前商品(圖片大小限制為64KB, 格式限制為jpeg、png、bmp、gif、 或 svg)</h5></li>'+
                '<li>欄位編號:<span class="id">'+response.id+'</span><input type="button" class="btn btn-danger btn-sm modify delete" value="刪除"></li>'+
                '<li>商品編號:<input type="text" name="item_id" id="" value=""><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>'+
                '<li>商品名稱:<input type="text" name="name" id="" value=""><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>'+
                '<li>商品價錢:<input type="text" name="price" id="" value=""><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>'+
                '<li>商品描述:<input type="text" name="description" id="" value=""><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>'+
                '<li>剩餘數量:<input type="text" name="remain_count" id="" value=""><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>'+
                '<li><img src="" height="300" width="300">' +
                    '<form enctype="multipart/form-data">'+
                        '<input type="file" name="file" />'+
                        '<input type="submit" name="submit" value="上傳" />'+
                        '<ul id="status">'+
                        '</ul>'+
                    '</form></li>'+
                '</ul>';
             $('#wrap').append(item_text);   
             initialize();
                 
            }
        });
    });


});
