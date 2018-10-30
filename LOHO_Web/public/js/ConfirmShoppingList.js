    var txtID = 0;
    var sum = 0;
    var pre_subtotal = 0

    var Item_display = function(item_name,item_price,item_count,img_url) {
        txtID++;
        sum = sum + item_price * item_count;
        $("#showBlock1").append("<div id='div1" + txtID +"' class='col-6 p-4 ml-2 text-left solid-top-border'>"
        +"<div id='div2" + txtID +"' class='row'>"
        +"<div class='col text-left' id='div3" + txtID +"'>"
        +"<p id='name"+txtID+"'>"+ item_name +"</p></div>"
        +"<h5 class='text-danger'>NT</h5>"+"<h5 id='price"+txtID+"' class='text-danger mr-2'>"+item_price+"</h5>"
        +"</div>"
        +"<img src='"+img_url+"' alt='圖片更新中' style='width:150px ; height:150px'class='img-thumbnail'</div>",
        "<div class='col p-4 text-center solid-top-border id='div4" + txtID +"'>"
        +"<p id='size"+txtID+"'>無</p></div>",
        "<div class='col p-4 text-center solid-top-border id='div5" + txtID +"'>"
        +"<p id='size"+txtID+"'>"+item_count+"</p></div>",
        "<div class='col p-4 text-center solid-top-border id='div6" + txtID +"'>"
        +"<h5 class='text-danger' id='subtotal"+txtID+"'>"+item_price * item_count+"</h5></div>");
        $('#count').text(txtID);
        $('#goodsTotal').text(sum);
        $('#orderTotal').text(sum+70);
    }


    function getConfirmCart() {
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
                            //alert(item.name +" NT$"+ item.price+"元"+ item.count+ "雙" + item.img_url);
                            Item_display(item.name,item.price,item.count,item.img_url);
                        }
                    }
                }
            });
        });
    }

    $(document).ready(function(){
        getConfirmCart();

        $('#view_voucher').click(function (e) { 
            e.preventDefault();
            window.location = "/LOHO_Web/public/Account/PersonalInformation";
        });
        $("#nextStep").click(function() {
            window.location  = "FillOrderList";
        });
    });
    

