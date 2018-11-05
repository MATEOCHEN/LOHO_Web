$(document).ready(function () {
    $('#next_step').prop('disabled', true);

    $('#last_step').click(function (e) { 
        e.preventDefault();
        window.location = "FillOrderList"; 
    });

    $('#next_step').click(function (e) { 
        e.preventDefault();
        window.location = ""; 
    });

    $('#ATM_Transfer').click(function (e) { 
        e.preventDefault();
        $('#ATM_TransferModal').modal('show');
    });

    $('#Bank_Transfer').click(function (e) { 
        e.preventDefault();
        $('#Bank_TransferModal').modal('show');
    });    

    $('#Cash_on_delivery').click(function (e) { 
        e.preventDefault();
        $('#Cash_on_deliveryModal').modal('show');
    });

    $('.confirm').click(function (e) { 
        e.preventDefault();
        $('#next_step').prop('disabled', false);
    });

    $('.cancel').click(function (e) { 
        e.preventDefault();
        $('#next_step').prop('disabled', true);
    });
});
