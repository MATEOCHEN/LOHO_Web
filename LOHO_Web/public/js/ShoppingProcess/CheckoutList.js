let payment_type;
let payment_info;
$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#next_step').prop('disabled', true);

    $('#last_step').click(function (e) { 
        e.preventDefault();
        window.location = "FillOrderList"; 
    });

    $('#next_step').click(function (e) { 
        e.preventDefault();
        
        $.ajax({
            type: "POST",
            url: "AfterCheckoutList",
            data: {
                payment_type: payment_type,
                payment_info: payment_info,
            },
            dataType: "json",
            success: function (response) {
                window.location = "ClearOrder"; 
            }
        });
    });

    $('#ATM_Transfer').click(function (e) { 
        e.preventDefault();
        payment_type  ='ATM_Transfer';
        $("#ATM_Transfer_Radio").prop("checked", true);
        $('#ATM_TransferModal').modal('show');
    });

    $('#Bank_Transfer').click(function (e) { 
        e.preventDefault();
        payment_type  ='Bank_Transfer';
        $("#Bank_Transfer_Radio").prop("checked", true);
        $('#Bank_TransferModal').modal('show');
    });    

    $('#Cash_on_delivery').click(function (e) { 
        e.preventDefault();
        payment_type  ='Cash_on_delivery';
        
        $("#Cash_on_delivery_Radio").prop("checked", true);
        $.ajax({
            type: "get",
            url: "queryAddress",
            data: "",
            dataType: "json",
            success: function (response) {
                $('#address').text(response.address);
                payment_info = "";
            }
        });
        
        $('#Cash_on_deliveryModal').modal('show');
        
    });


    //二種轉帳確認,下一步enabled
    $('#confirm_ATM_Transfer').click(function (e) { 
        e.preventDefault();
        payment_info = $('#ATM_Transfer_financial_info').val();
        $('#next_step').prop('disabled', false);
    });

    //二種轉帳確認,下一步enabled
    $('#confirm_Bank_Transfer').click(function (e) { 
        e.preventDefault();
        payment_info = $('#Bank_Transfer_financial_info').val();
        $('#next_step').prop('disabled', false);
    });

    //貨到付款確認,下一步enabled
    $('.confirm_Cash_on_delivery').click(function (e) { 
        e.preventDefault();
        
        $('#next_step').prop('disabled', false);
    });

    //按下取消, 付款方式radio unchecked,下一步disabled
    $('.cancel').click(function (e) { 
        e.preventDefault();
        $('#next_step').prop('disabled', true);
        $("#ATM_Transfer_Radio").prop("checked", false);
        $("#Bank_Transfer_Radio").prop("checked", false);
        $("#Cash_on_delivery_Radio").prop("checked", false);
        payment_type = "";
        payment_info = "";
    });
});
