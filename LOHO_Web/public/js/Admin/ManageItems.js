let field_deletion_list = [];
let field_add_list = [];

$(document).ready(function () {
    //載入頁面,並initialize()
    initialize();
    alert("Loading page");
    load();

    function load() {
        var strUrl = location.search;
        var getPara, ParaVal;
        var aryPara = [];
      
        if (strUrl.indexOf("?") != -1) {
          var getSearch = strUrl.split("?");
          getPara = getSearch[1].split("&");
          for (i = 0; i < getPara.length; i++) {
            ParaVal = getPara[i].split("=");
            aryPara.push(ParaVal[0]);
            aryPara[ParaVal[0]] = ParaVal[1];
          }
          getProduct(aryPara['category_id']);
        }        
    }
   
    $('.change').click(function (e) { 
        e.preventDefault();
        var category_id = $(this).val();
        $('.category').text(category_id);

        getProduct(category_id);
    });

    $('#submit_image').submit(function (e) { 
        e.preventDefault();

        
        let li_dom = $(this).parent('li');
        let img_dom = li_dom.children('img');

        var formData = new FormData($(this)[0]);
        
        $.ajax({
            url: 'uploadImg',
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
                    $('#addingstatus').empty();
                    response.errors.forEach(error => {
                        $('#addingstatus').append('<li>' + error + '</li>');
                    });
                } else {
                    $('#addingstatus').empty();
                    $('#addingstatus').append('<li>' + '圖片上傳成功' + '</li>');

                    let src = "http://localhost/LOHO_Web/public/" + response.url;
                    img_dom.attr('src', src);
                }
            },
        });
        e.preventDefault();
        
    });

    //前端增加商品欄, 必須再initialize()
    $('#addItem_confirm').click(function (e) {
        e.preventDefault();
        let item_text;
        let category_id = $('.category').text();
        let img_url = $('#image_adding').attr('src');
        img_url = img_url.replace("http://localhost/LOHO_Web/public/","")
        $.ajax({
            type: "POST",
            url: "addItemsToDatabase",
            data: {
                category_id: category_id,
                item_id:$('.item_id').val(),
                name:$('.name').val(),
                price:$('.price').val(),
                description:$('.description').val(),
                remain_count:$('.remain_count').val(),
                img_url:img_url,
            },
            dataType: "json",
            success: function (response) {
                let src = "http://localhost/LOHO_Web/public/" + response.img_url;
                item_text = '<ul>'+
                '<li>欄位編號:<span class="id">'+response.id+'</span><input type="button" class="btn btn-danger btn-sm modify delete" value="刪除" data-toggle="modal" data-target="#exampleModal"></li>'+
                '<li>商品編號:<input type="text" name="item_id" id="" value='+$('.item_id').val()+'></li>'+
                '<li>商品名稱:<input type="text" name="name" id="" value='+$('.name').val()+'></li>'+
                '<li>商品價錢:<input type="text" name="price" id="" value='+$('.price').val()+'></li>'+
                '<li>商品描述:<input type="text" name="description" id="" value='+$('.description').val()+'></li>'+
                '<li>剩餘數量:<input type="text" name="remain_count" id="" value='+$('.remain_count').val()+'></li>'+
                '<li><img src="'+src+'" height="300" width="300">' +
                    '<form enctype="multipart/form-data" class="normal">'+
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

    //update按鈕按下 更新按鈕active
    $('.update').click(function (e) { 
        e.preventDefault();
        
    });
});

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
    
    //當input value change update該欄位值
    $(':input[type="text"]').on("change", function (event) {
        if ($(this).val() != '') {
            let parent_dom = $(this).parent("li");
            let submit_dom = parent_dom.children(':input[type="submit"]');
            submit_dom.prop('disabled', false);
        }

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
    })
    });

     //當選擇檔案按下, 上傳submit button active
     $(":input[type='file']").on("change", function (event) {
        let parent_dom = $(this).parent("form");
        let submit_dom = parent_dom.children(':input[type="submit"]');
        submit_dom.prop('disabled', false);
    })


    //ajax上傳圖片(記得要preventDefault)
    $('.normal').submit(function (e) {

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
    
    //dom推入推疊
    $('.delete').click(function (e) {
        e.preventDefault();
        field_deletion_list.push($(this));
    });  

    //dom取出推疊
    $('.delete_cancel').click(function (e) {
        e.preventDefault();
        let current = field_deletion_list.pop();
    }); 

    ///dom取出推疊並刪除
    $('.delete_confirm').click(function (e) {
        e.preventDefault();
        let current = field_deletion_list.pop();
        let ul_dom = current.parent('li').parent('ul');
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

function getProduct(category_id) {
    $(document).ready(function () {
        //ajax 初始化
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: "get",
            url: "getItems",
            data: {category_id:category_id},
            dataType: "json",
            success: function (response) {
                $('#wrap').empty();
                for (let index = 0; index < response.items.length; index++) {
                    const item = response.items[index];
                    let src = "http://localhost/LOHO_Web/public/" + response.items[index].img_url;
                    item_text = '<ul>'+
                    '<li>欄位編號:<span class="id">'+response.items[index].id+'</span><input type="button" class="btn btn-danger btn-sm modify delete" value="刪除" data-toggle="modal" data-target="#exampleModal"></li>'+
                    '<li>商品編號:<input type="text" name="item_id" id="" value="'+response.items[index].item_id+'"></li>'+
                    '<li>商品名稱:<input type="text" name="name" id="" value="'+response.items[index].name+'"></li>'+
                    '<li>商品價錢:<input type="text" name="price" id="" value="'+response.items[index].price+'"></li>'+
                    '<li>商品描述:<input type="text" name="description" id="" value="'+response.items[index].description+'"></li>'+
                    '<li>剩餘數量:<input type="text" name="remain_count" id="" value="'+response.items[index].remain_count+'"></li>'+
                    '<li><img src="'+src+'" height="300" width="300">' +
                        '<form enctype="multipart/form-data" class="normal">'+
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
       
}

