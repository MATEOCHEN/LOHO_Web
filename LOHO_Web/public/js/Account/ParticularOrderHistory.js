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
           response.details_list.forEach(element => {
               //寫入前端
           });
        }
    });
    }  



    $('#last_step').click(function (e) { 
    e.preventDefault();
    window.location = 'ViewAllOrderHistory';

    });




});