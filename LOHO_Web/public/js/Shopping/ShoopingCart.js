    //add the item dynamically
    var shoppingcart_status = "empty";

    var txtID = 0;
    var sum = 0;
    var pre_subtotal = 0

    var Item_added = function(item_name,item_price,item_count,img_url) {
        txtID++;
        sum = sum + item_price * item_count;

        $("#showBlock").append("<div id='div1" + txtID +"' class='col-6 p-4 ml-2 text-left solid-top-border'>"
        +"<div id='div2" + txtID +"' class='row'>"
        +"<div class='col text-left' id='div3" + txtID +"'>"
        +"<p id='name"+txtID+"'>"+ item_name +"</p></div>"
        +"<p class='text-danger'>NT</p>"+"<p id='price"+txtID+"' class='text-danger mr-2'>"+item_price+"</p>"+"<p class='text-danger'>元</p>"
        +"<input type='image' src='/LOHO_Web/public/svg/rubbish-bin.svg' alt='圖片更新中' style='width:25px ; height:25px' onclick ='Item_removed("+txtID+")'></div>"
        +"<img src='"+img_url+"' alt='圖片更新中' style='width:150px ; height:150px'class='img-thumbnail'</div>",
        "<div class='col p-4 text-center solid-top-border id='div4" + txtID +"'>"
        +"<p id='size"+txtID+"'>無</p></div>",
        "<div class='col p-4 text-center solid-top-border id='div5" + txtID +"'>"
        +"<input type='number' value="+item_count+" placeholder="+item_count+" id='quantity" +txtID+"' min='1' onfocusin='get_old_value("+txtID+")' onchange='item_changed("+txtID+")'></div>",
        "<div class='col p-4 text-center solid-top-border id='div6" + txtID +"'>"
        +"<h5 class='text-danger' id='subtotal"+txtID+"'>"+item_price * item_count+"</h5></div>");
        $('#count').text(txtID);
        $('#total').text(sum);
    }

    var get_old_value = function(id){
        var pre_count = parseInt(document.getElementById("quantity"+id).value);
        let initial_price = $('#price'+id).text();
        pre_subtotal = pre_count * initial_price;
    } 

    var item_changed = function(id){
        $(document).ready(function () {
            let initial_name = $('#name'+ id).text();
            let click_count = parseInt(document.getElementById("quantity"+id).value);
            let initial_price = $('#price'+id).text();
            let click_subtotal = initial_price * click_count; //subtotal
            sum = sum - pre_subtotal + click_subtotal; //total
            $('#subtotal'+id).text(click_subtotal);
            $('#total').text(sum);
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "updateCart",
                data: {item_name : initial_name,item_count : click_count},
                dataType: "json",
                success: function (response) {
                    let item = response.item;
                    alert("更改數量" + item.name +" "+item.count+"雙");
                }
            });
        });
    }
    /*
    var defaultCart = function() {
        $("#showBlock").append("<div class='col-6 p-4 ml-2 text-left solid-bottom-border'>"
        +"<div class='row'>"
        +"<div class='col text-left'>"
        +"<h5>目前暫無商品</h5></div>"
        +"</div>"
        +"</div>",
        "<div class='col p-4 text-center solid-bottom-border'>"
        +"</div>",
        "<div class='col p-4 text-center solid-bottom-border'>"
        +"</div>",
        "<div class='col p-4 text-center solid-bottom-border'>"
        +"</div>");
    }*/
    var Item_removed = function(id) {
        let initial_name = $('#name'+id).text();
        let initial_subtotal = $('#subtotal'+id).text();
        txtID--;
        sum = sum - parseInt(initial_subtotal);
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
        alert(initial_name);
        $('#count').text(txtID);
        $('#total').text(sum); 
        element_removed(id);
    }

    var element_removed = function(id){
        for(var i = 1 ; i <= 6 ; i++) {
            $('#div' + i.toString() + id.toString()).remove();
            $('#size'+ id.toString()).remove();
            $('#quantity'+ id.toString()).remove();
            $('#subtotal'+ id.toString()).remove();
        }

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
                        const item =  response.items[index];
                        if(item.name === null){
                            continue;
                        }
                        else{
                            Item_added(item.name,item.price,item.count,item.img_url);
                            shoppingcart_status = "noEmpty";
                        }
                    }
                }
            });
        });
    }
    
    //front side pop-up window
    $(document).ready(function(){
        $("#Dialog").dialog({width:"80%",
        height:"500",
        maxHeight:"600",
        draggable: false,
        modal: true,
        fluid : true,
        autoOpen: false,
        show:"fade",
        resizable:"false",
        close:function() {
            $('#showBlock').empty();
            txtID = 0;
            sum = 0;
        }
    });
    
        $("#ShoppingCart").click(function() {
            $("#Dialog").dialog("open");
            getCart();
        });

        $("#checkOut").click(function() {
           if(shoppingcart_status === "noEmpty") {
                window.location = "/LOHO_Web/public/ShoppingProccess/ConfirmShoppingList";
            } else {
                alert("目前購物車沒有商品")
            }
        });
    });
