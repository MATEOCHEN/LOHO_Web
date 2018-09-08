$(document).ready(function () {
    $('.change').click(function (e) { 
        e.preventDefault();
        var category_id = $(this).val();
        window.location = "ManageProduct?category_id=" + category_id;
    });
});