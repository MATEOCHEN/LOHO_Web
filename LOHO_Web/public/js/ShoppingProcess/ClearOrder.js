$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "get",
        url: "queryOrderer",
        data: "",
        dataType: "json",
        success: function (response) {
            $('#ordererName').text(response.ordererName);
        }
    });
});