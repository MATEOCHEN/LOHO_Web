$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#register_form').submit(function (e) { 
        e.preventDefault();
        
        $.ajax({
            type: "POST",
            url: "AfterRegisterAccount",
            data: {
                account: $("#account").val(),
                password: $("#password").val(),
                password_confirmation: $("#password_confirmation").val(),
                name:$("#name").val(),
                telephone_number:$("#telephone_number").val(),
                phone_number:$("#phone_number").val(),
                email:$("#email").val(),
            },
            dataType: "json",
            success: function (response) {
                if(response.status === 'success')
                {   
                    window.location  = "/LOHO_Web/public/";
                }else{
                    $('#ErrorModal').modal('show');
                    response.errors.forEach(error => {
                        $('#errors_area').append('<li>'+error+'</li>');
                    });
                }
            }
        });
    });

    $('#twzipcode').twzipcode({
        'css': ['country', 'area', 'zipcode'],
        'countyName': 'AccountCountry',
        'districtName': 'AccountArea',
        'zipcodeName': 'AccountZipcode'
    });
});
