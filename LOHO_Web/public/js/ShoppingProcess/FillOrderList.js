$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "get",
        url: "GetOrderList",
        data: "",
        dataType: "json",
        success: function (response) {
            $("input[name='OrdererZipcode']").val(response.ordererPostal_code);
            $("select[name='OrdererCountry']").val(response.ordererCountry);
            fire_event('OrdererCountry');
            $("select[name='OrdererArea']").val(response.ordererArea);
            $("input[name='RecipientZipcode']").val(response.RecipientPostal_code);
            $("select[name='RecipientCountry']").val(response.RecipientCountry);
            fire_event('RecipientCountry');
            $("select[name='RecipientArea']").val(response.RecipientArea);
        }
    });

    $("#next_step").click(function() {
            //存入訂購人, 收款人資料進session
            //ordererName,ordererEmail,ordererTEL,ordererPhone,address
            //RecipientName,RecipientEmail,RecipientTEL,RecipientPhone,address1
                              
            $.ajax({
                type: "POST",
                url: "AfterFillOrderList",
                data: {
                    ordererName: $('#ordererName').val(),
                    ordererEmail: $('#ordererEmail').val(),
                    ordererTEL: $('#ordererTEL').val(),
                    ordererPhone:$('#ordererPhone').val(),
                    ordererPostal_code:$("input[name='OrdererZipcode']").val(),
                    ordererCountry:$("select[name='OrdererCountry']").val(),
                    ordererArea:$("select[name='OrdererArea']").val(),
                    ordererAddress:$('#address').val(),//需處理前面縣市地址
                    RecipientName:$('#RecipientName').val(),
                    RecipientEmail:$('#RecipientEmail').val(),
                    RecipientTEL:$('#RecipientTEL').val(),
                    RecipientPhone:$('#RecipientPhone').val(),
                    RecipientPostal_code:$("input[name='RecipientZipcode']").val(),
                    RecipientCountry:$("select[name='RecipientCountry']").val(),
                    RecipientArea:$("select[name='RecipientArea']").val(),
                    RecipientAddress:$('#address1').val(),//需處理前面縣市地址
                    // $("select[name='RecipientCountry']"), $("select[name='RecipientArea']"), $("input[name='RecipientZipcode']")
                },
                dataType: "json",
                success: function (response) {
                    if(response.status === 'success')
                    {   
                        
                        window.location  = "CheckoutList";
                    }else{
                        $('#ErrorModal').modal('show');
                        response.errors.forEach(error => {
                            $('#errors_area').append('<li>'+error+'</li>');
                        });
                    }
                }
            }); 
    });

    $('#last_step').click(function (e) {
        e.preventDefault();
        window.location = "ConfirmShoppingList";
    });

    $('#twzipcode').twzipcode({
        'css': ['country', 'area', 'zipcode'],
        'countyName': 'OrdererCountry',
        'districtName': 'OrdererArea',
        'zipcodeName': 'OrdererZipcode'
    });
    $('#twzipcode1').twzipcode({
        'css': ['country', 'area', 'zipcode'],
        'countyName': 'RecipientCountry',
        'districtName': 'RecipientArea',
        'zipcodeName': 'RecipientZipcode'
    });
    checkBox_clicked();
    //引入帳戶資料
    $('#is_consistent_account_data').change(function (e) { 
        e.preventDefault();
        
        if ($('#is_consistent_account_data').prop("checked")){
            
        } else {

        }
    });

});

function checkBox_clicked() {
    $('#defaultCheck').change(function () {
        OrdererName = $("#ordererName").val();
        OrdererEmail = $("#ordererEmail").val();
        OrdererTEL = $("#ordererTEL").val();
        OrdererPhone = $("#ordererPhone").val();
        Country = $("select[name='OrdererCountry']").val();
        Area = $("select[name='OrdererArea']").val();
        ZipCode = $("input[name='OrdererZipcode']").val();
        Address = $("#address").val();
        if ($('#defaultCheck').prop("checked")) {
            $("#RecipientName").val(OrdererName);
            $("#RecipientEmail").val(OrdererEmail);
            $("#RecipientTEL").val(OrdererTEL);
            $("#RecipientPhone").val(OrdererPhone);
            $("select[name='RecipientCountry']").val(Country);
            fire_event('RecipientCountry');
            $("select[name='RecipientArea']").val(Area);
            $("input[name='RecipientZipcode']").val(ZipCode);
            $("#address1").val(Address);
        } else {
            $("#RecipientName").val("");
            $("#RecipientEmail").val("");
            $("#RecipientTEL").val("");
            $("#RecipientPhone").val("");
            $("select[name='RecipientCountry']").val("")
            fire_event('RecipientCountry');
            $("select[name='RecipientArea']").val("");
            $("input[name='RecipientZipcode']").val("");
            $("#address1").val("")
        }
    })
}

function fire_event(variable) {
    var event = new Event('change');
    var d = document.getElementsByName(variable)[0];
    d.dispatchEvent(event);
}

