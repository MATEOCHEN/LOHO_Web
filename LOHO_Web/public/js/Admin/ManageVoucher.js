$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#addVoucher_confirm').click(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "AddVouchers",
            data: {
                input_voucher_coupon_code:$('.input_voucher_coupon_code').val(),
                input_voucher_price:$('.input_voucher_price').val(),
            },
            dataType: "json",
            success: function (response) {
                alert(response.msg);
            }
        });

    });
});