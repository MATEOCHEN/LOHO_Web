

    var txtID = 1;

    //前端pop-up window
    $(document).ready(function () {
        $("#Dialog").dialog({
            width: "1000",
            height: "500",
            maxHeight: "600",
            draggable: false,
            modal: true,
            autoOpen: false,
            show: "fade",
            resizable: "false",
            close:function(){
                $('#showBlock').empty();
            }
        });
        $("#ShoppingCart").click(function () {
            $("#Dialog").dialog("open");
            getCart();
        });
    });
    //initialize
    $(document).ready(function () {
        let initial_name = $('#name').text();
        
        setTotalandCount(initial_quantity, initial_total);

        $("input").on("change", function (event) {
            alert("change");
            let click_count = parseInt(document.getElementById("quantity").value);

            if (click_count < 1) {
                document.getElementById("quantity").value = 1;
                click_count = $(this).val();
            }
            let click_price = $('#price').text();
            
            setTotalandCount(click_count, click_price);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "updateCart",
                data: {
                    item_name: initial_name,
                    item_count: click_count
                },
                dataType: "json",
                success: function (response) {
                    let item = response.item;
                    alert("更改數量" + item.name + " " + item.count + "雙");
                }
            });
        });

        /*$('#deleteItem').click(function (e) { 
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: "POST",
            url: "deleteCart",
            data: {item_name : initial_name},
            dataType: "json",
            success: function (response) {
                let item = response.item;
                alert("刪除" + item.name);
            }
            });
            });*/
    });

    function defaultCart() {
        $("#showBlock").append("<div class='col-6 p-4 ml-2 text-left solid-bottom-border'>" +
            "<div class='row'>" +
            "<div class='col text-left'>" +
            "<h5>目前暫無商品</h5></div>" +
            "</div>" +
            "</div>",
            "<div class='col p-4 text-center solid-bottom-border'>" +
            "</div>",
            "<div class='col p-4 text-center solid-bottom-border'>" +
            "</div>",
            "<div class='col p-4 text-center solid-bottom-border'>" +
            "</div>");
    }

    function Item_removed(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "deleteCart",
            data: {
                item_name: initial_name
            },
            dataType: "json",
            success: function (response) {
                let item = response.item;
                alert("刪除" + item.name);
            }
        });
        $("#div" + id).remove();
    }

    function setTotalandCount(total_count, total_sum) {
        $('#subtotal').text(total_sum);
        $('#total').text(total_sum);
        $('#count').text(total_count);
    }
    function Item_added(item_name, item_price, item_count,img_url) {
        $("#showBlock").append("<div class='col-6 p-4 ml-2 text-left solid-bottom-border' id='div'" + txtID + ">" +
            "<div class='row'>" +
            "<div class='col text-left'>" +
            "<p id='name'>" + item_name + "</p></div>" +
            "<p class='text-danger mr-2'>NT" + item_price + "元</p>" +
            "<img src='"+img_url+"'alt='圖片更新中' width='25px' height='25px'></div>" +
            "<input type='image' src='svg/sock.svg' alt='圖片更新中' class='img-thumbnail' onclick ='Item_removed(" +
            txtID + ")></div>",
            "<div class='col p-4 text-center solid-bottom-border'>" +
            "<p>無</p></div>",
            "<div class='col p-4 text-center solid-bottom-border'>" +
            "<input type='number' value=" + item_count + " placeholder=" + item_count + " id='quantity'" + txtID +
            " min='1' ></div>",
            "<div class='col p-4 text-center solid-bottom-border'>" +
            "<h5 class='text-danger' id='subtotal'>" + item_price * item_count + "</h5></div>");
        txtID++;
    }

    function getCart() {
        $(document).ready(function () {
            

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: "/LOHO_Web/public/Shopping/getCart",
                data: "",
                dataType: "json",
                success: function (response) {
                    for (let index = 0; index < response.items.length; index++) {
                        const item = response.items[index];
                        if (item.name === null) {
                            continue;
                        } else {
                            alert(item.name + " NT$" + item.price + "元" + item.count + "雙" + item.img_url);
                            Item_added(item.name, item.price, item.count, item.img_url);
                            setTotalandCount(item.count,item.price);
                        }
                    }
                }
            });
        });
    }