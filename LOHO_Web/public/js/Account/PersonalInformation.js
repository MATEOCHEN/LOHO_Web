$(document).ready(function () {
    //初始化
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });  

    initialize();
    
    $('#modify_info').click(function (e) { 
        e.preventDefault();
        $('#submit-area').show();
        $(':input[type="text"]').prop('disabled', false);
        $("select[name='AccountCountry']").attr('disabled', false);
        $("select[name='AccountArea']").attr('disabled', false);
        $("input[name='AccountZipcode']").attr('disabled', false);
    });

    //確認更改資料
    $('#confirm_modify').click(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "ModifyPersonalInformation",
            data: {
                name:$('#name').val(),
                telephone_number:$('#telephone_number').val(),
                phone_number:$('#phone_number').val(),
                postal_code:$('#postal_code').val(),
                email:$('#email').val(),
                postal_code:$("input[name='AccountZipcode']").val(),
                country:$("select[name='AccountCountry']").val(),
                area:$("select[name='AccountArea']").val(),
                address:$('#address').val(),
            },
            dataType: "json",
            success: function (response) {
                alert('修改成功');
                location.reload();
            }
        });


        initialize();
    });

    $('#cancel_modify').click(function (e) { 
        e.preventDefault();
        initialize();
    });

    function initialize()
    {   //$(":select[]").prop('disabled',true);
        //預設所有input[text], 更改button都disabled
        $(':input[type="text"]').prop('disabled', true);
        $('#submit-area').hide();

        $.ajax({
            type: "get",
            url: "GetAddressData",
            data: "",
            dataType: "json",
            success: function (response) {
                
                $("select[name='AccountCountry']").val(response.country);
                fire_event('AccountCountry');
                $("select[name='AccountArea']").val(response.area);
                fire_event('AccountArea');
                $("input[name='AccountZipcode']").val(response.postal_code);                
                $("#address").val(response.address);
                
                $("select[name='AccountCountry']").attr('disabled', true);
                $("select[name='AccountArea']").attr('disabled', true);
                $("input[name='AccountZipcode']").attr('disabled', true);
            }
        });


    }

    function fire_event(variable) {
        var event = new Event('change');
        var d = document.getElementsByName(variable)[0];
        d.dispatchEvent(event);
    }
});