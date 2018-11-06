$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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
                    ordererAddress:$('#address').val(),//需處理前面縣市地址
                    RecipientName:$('#RecipientName').val(),
                    RecipientEmail:$('#RecipientEmail').val(),
                    RecipientTEL:$('#RecipientTEL').val(),
                    RecipientPhone:$('#RecipientPhone').val(),
                    RecipientAddress:$('#address1').val(),//需處理前面縣市地址
                },
                dataType: "json",
                success: function (response) {
                    window.location  = "CheckoutList";
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
            fire_event();
            $("select[name='RecipientArea']").val(Area);
            $("input[name='RecipientZipcode']").val(ZipCode);
            $("#address1").val(Address);
        } else {
            $("#RecipientName").val("");
            $("#RecipientEmail").val("");
            $("#RecipientTEL").val("");
            $("#RecipientPhone").val("");
            $("select[name='RecipientCountry']").val("")
            fire_event();
            $("select[name='RecipientArea']").val("");
            $("input[name='RecipientZipcode']").val("");
            $("#address1").val("")
        }
    })
}

function fire_event() {
    var event = new Event('change');
    var d = document.getElementsByName("RecipientCountry")[0];
    d.addEventListener('event', function () {
        alert("123");
    });
    d.dispatchEvent(event);
}
