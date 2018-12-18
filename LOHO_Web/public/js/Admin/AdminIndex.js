$(document).ready(function () {
    //初始化
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });  

    function category_btn_click() {
        $(document).ready(function () {
            //商品欄位管理
            $('.category_btn').click(function (e) { 
                e.preventDefault();
                var category_id = $(this).attr('id');
                window.location = "ManageItems?category_id=" + category_id;
            });               
        });
     
    }

    $.ajax({
        type: "get",
        url: "GetCategory",
        data: "",
        dataType: "json",
        success: function (response) {
            response.categories.forEach(category => {
               
                alert(category.id);
                let str = '<input type="button" class="btn btn-success btn-sm category_btn" id="' +category.id+'"value=' + category.name +'></input>';
                $('.category').append(str);
                category_btn_click();
            });
        }
    });

    //會員資料管理
    $('.account').find('input[type="button"]').click(function (e) { 
        e.preventDefault();
        window.location = "ManageAccounts/ManageAccounts";
    });

    //優惠卷品項管理
    $('.voucher').find('input[type="button"]').click(function (e) { 
        e.preventDefault();
        window.location = "ManageVouchers/ManageVouchers";
    });

});