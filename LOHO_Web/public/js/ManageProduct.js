$(document).ready(function () {
    alert('Loading admin page');

    //ajax 初始化
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

    //預設所有submit button都disabled
    $(':input[type="submit"]').prop('disabled', true);

    //當更改欄位值, 更改submit button active
    $(':input[type="text"]').keyup(function() {
        if($(this).val() != '') {
            let parent_dom = $(this).parent("li");
            let submit_dom = parent_dom.children(':input[type="submit"]');
            submit_dom.prop('disabled', false);
        }
    });

    //當選擇檔案按下, 上傳submit button active
    $(":input[type='file']").on("change",function(event){
        let parent_dom = $(this).parent("form");
        let submit_dom = parent_dom.children(':input[type="submit"]');
        submit_dom.prop('disabled', false);
    }
    )

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
            data: {name:dom_name, value:dom_value,id:id_dom.text()},
            dataType: "json",
            success: function (response) {
                alert('更改'+response.name +"為"+response.value);
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
        formData.append('id',id_dom.text());
        $.ajax({
            url:'upload',
            data:formData,
            contentType: "charset=utf-8",
            dataType:'json',
            async:true,
            type:'POST',
            enctype:"multipart/form-data",
            processData: false,
            contentType: false,
            success:function(response) {

                if(response.errors != null || undefined)
                {
                    $('#status').empty();
                    response.errors.forEach(error => {
                        $('#status').append('<li>'+error+'</li>');
                    });
                }
                else
                {   
                    $('#status').empty();
                    $('#status').append('<li>'+'圖片更新成功'+'</li>');

                    let src = "http://localhost/LOHO_Web/public/"+response.url;
                    img_dom.attr('src', src);
                }
            },
          });
          
          e.preventDefault();
    });

    //前端增加商品欄
    $('#addItem').click(function (e) { 
        e.preventDefault();
        
        let count = 1;
        $.ajax({
            type: "POST",
            url: "addItemsToDatabase",
            data: {count:count},
            dataType: "json",
            success: function (response) {
                alert('成功新增'+response.count+'項商品');
            }
        });
    });

    $('#deleteItem').click(function (e) { 
        e.preventDefault();
       
        $.ajax({
            type: "POST",
            url: "deleteItemsFromDatabase",
            data: {id:4,count:1},
            dataType: "json",
            success: function (response) {
                alert('成功刪除'+response.count+'項商品');
            }
        });

    });
});