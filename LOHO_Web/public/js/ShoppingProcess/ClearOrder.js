$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "post",
        url: "queryCurrentOrderList",
        data: "",
        dataType: "json",
        success: function (response) {
            $('#ordererName').text(response.ordererName);
            $('#ordererEmail').text(response.ordererEmail);
            $('#ordererTEL').text(response.ordererTEL);
            $('#ordererPhone').text(response.ordererPhone);
            $('#ordererAddress').text(response.ordererAddress);
            $('#RecipientName').text(response.RecipientName);
            $('#RecipientEmail').text(response.RecipientEmail);
            $('#RecipientTEL').text(response.RecipientTEL);
            $('#RecipientPhone').text(response.RecipientPhone);
            $('#RecipientAddress').text(response.RecipientAddress);
            $('#goodsTotal').text(response.goodsTotal);
            $('#shippingFee').text(response.shippingFee);
            $('#coupon_price').text(response.coupon_price);
            $('#orderTotal').text(response.orderTotal);
            $('#coupon_price').text(response.coupon_price);
            if(response.coupon_code === 'default')
            {
                $('#coupon_code').text('未使用優惠卷');
            }
            else{
                $('#coupon_code').text(response.coupon_code);
            }
            


            let payment_type;
            let payment_info;
            switch (response.payment_type) {
                case 'ATM_Transfer':
                    payment_type = "ATM轉帳";
                    payment_info = "帳號末五碼:" + response.payment_info;
                    break;
                
                case 'Bank_Transfer':
                    payment_type = "銀行匯款";
                    payment_info = "帳號末五碼:" + response.payment_info;
                    break;

                case 'Cash_on_delivery':
                    payment_type = "貨到付款";
                    payment_info = "寄送地址：" + response.payment_info;
                    break;
            
                default:
                    break;
            }
            $('#payment_type').text(payment_type);
            $('#payment_info').text(payment_info);
            
        }
    });

    //存購物車資料進後台DB
    $('#next_step').click(function (e) { 
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "AfterClearOrder",
            data: "",
            dataType: "json",
            success: function (response) {
                window.location = "FinishOrder"; 
            }
        });
    });

    $('#last_step').click(function (e) { 
        e.preventDefault();
        window.location = "CheckoutList"; 
    });

});