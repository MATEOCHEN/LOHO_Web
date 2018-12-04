$(document).ready(function () {
    
    //商品欄位管理
    $('.category').find('input[type="button"]').click(function (e) { 
        e.preventDefault();
        var category_id = $(this).val();
        window.location = "ManageItems?category_id=" + category_id;
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