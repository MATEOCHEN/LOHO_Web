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
    {
        //預設所有input[text], 更改button都disabled
        $(':input[type="text"]').prop('disabled', true);
        $('#submit-area').hide();
    }
});