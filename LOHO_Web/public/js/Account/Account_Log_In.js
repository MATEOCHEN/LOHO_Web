$(document).ready(function () {
        //ajax 初始化
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $('#login').submit(function (e) { 
        e.preventDefault();
        var formData = new FormData($(this)[0]);

        $.ajax({
            type: "POST",
            url: 'AfterAccount_Log_In',
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(response) {
                if(response.status === 'success')
                {
                    window.location = "/LOHO_Web/public/";
                }
                else{
                    $('#ErrorModal').modal('show');
                    response.errors.forEach(error => {
                        $('#errors_area').append('<li>'+error+'</li>');
                    });
                }
            },
    });
    });

    $('#confirmError').click(function (e) { 
        e.preventDefault();
        $('#errors_area').empty();
    });

    $('#closeModal').click(function (e) { 
        e.preventDefault();
        $('#errors_area').empty();
    });    
});