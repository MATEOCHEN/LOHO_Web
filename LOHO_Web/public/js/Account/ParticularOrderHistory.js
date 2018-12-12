var txtID = 0;
    

var Item_display = function(item_name,item_price,item_count,item_size,item_total) {
    txtID++;
    $("#showBlock1").append("<div id='div1" + txtID +"' class='col-6 text-left solid-top-border'>"
    +"<div id='div2" + txtID +"'class='row'>"
    +"<div class='col text-left' id='div3" + txtID +"'>"
    +"<h5 id='name"+txtID+"'>"+ item_name +"</h5></div>"
    +"<h5 class='text-danger'>NT</h5>"
    +"<h5 id='price"+txtID+"' class='text-danger mr-2'>"+item_price+"</h5>"
    +"<h5 class='text-danger'>元</h5></div>"
    +"<img src='"+img_url+"' alt='圖片更新中' style='width:150px ; height:150px'class='img-thumbnail'</div>",
    "<div class='col-2  text-center solid-top-border id='div4" + txtID +"'>"
    +"<p id='size"+txtID+"'>"+ item_size +"</p></div>",
    "<div class='col-2 text-center solid-top-border id='div5" + txtID +"'>"
    +"<h5 id='count "+txtID+"'>"+item_count+"</h5>"
    ,"<div class='col-2 text-center solid-top-border id='div6" + txtID +"'>"
    +"<h5 class='text-danger' id='subtotal"+txtID+"'>"+item_price * item_count+"</h5></div>");
    $('#count').text(txtID);
    $('#goodsTotal').text(item_total);
    $('#orderTotal').text(sum+70 - $('#coupon_price').text());
}



var getHistoryItem = function() {
    $(document).ready(function () {
        //初始化
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }); 
        //get url order_id parameter
        var strUrl = location.search;
        var getPara, ParaVal;
        var aryPara = [];
      
        if (strUrl.indexOf("?") != -1) {
          var getSearch = strUrl.split("?");
          getPara = getSearch[1].split("&");
          for (i = 0; i < getPara.length; i++) {
            ParaVal = getPara[i].split("=");
            aryPara.push(ParaVal[0]);
            aryPara[ParaVal[0]] = ParaVal[1];
          }
          
        //取得購物商品資料
        $.ajax({
            type: "get",
            url: "GetShoppingList",
            data: {
                order_id:aryPara['order_id'],
            },
            dataType: "json",
            success: function (response) {
               response.details_list.forEach(
                element=>
                { 
                    var goods_name = element.item_name;
                    var goods_price = element.item_price;
                    var goods_count = element.count;
                    var goods_size = element.item_size;   
                    var goods_total = element.goodsTotal;
                    Item_display(goods_name,goods_price,goods_count,goods_size,goods_total);
                }
            )
            alert(response.details_list.length);
            }
        });
        }  
    });
}

$(document).ready(function () {
    getHistoryItem();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); 


    $('#last_step').click(function (e) { 
        e.preventDefault();
        window.location = 'ViewAllOrderHistory';
    });



});