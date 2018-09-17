<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="css/bootstrap(1).css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<div id="nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url("/") }}">
            <img alt="Brand" src="<?php echo asset('/Image/LOGO.svg');?>" width="150px" height="70spx">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown h5" href="#" id="DropdownMenuAboutLoho" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        關於LOHO
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="d-flex flex-row">
                            <div class="d-flex flex-column">
                                <a class="dropdown-header"><b>樂活足跡</b></a>
                                <a class="dropdown-item" href="#">樂活歷史</a>
                                <a class="dropdown-item" href="#">樂活據點</a>
                                <a class="dropdown-item" href="#">樂活榮耀</a>
                                <a class="dropdown-item" href="#">樂活導覽</a>
                            </div>
                            <div class="d-flex flex-column">
                                <a class="dropdown-header"><b>眾人見證</b></a>
                                <a class="dropdown-item" href="#">輝煌獎項</a>
                                <a class="dropdown-item" href="#">眾人見證</a>
                            </div>
                            <div class="d-flex flex-column">
                                <a class="dropdown-header"><b>媒體報導</b></a>
                                <a class="dropdown-item" href="#">雜誌專刊</a>
                                <a class="dropdown-item" href="#">影音專訪</a>
                                <a class="dropdown-item" href="#">網路專題</a>
                            </div>
                        </div>
                    </div>
                </li>


                <a class="nav-item nav-link h5" href="{{ url("Shopping/BrowseItems") }}">精選主題</a>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown h5" href="#" id="DropdownMenuMen" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        男款
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="d-flex flex-row">
                            <a class="dropdown-header"><b>新品上市</b></a>
                            <div class="d-flex flex-column">
                                <a class="dropdown-header"><b>襪子</b></a>
                                <a class="dropdown-item" href="#">抗臭機能襪</a>
                                <a class="dropdown-item" href="#">抗菌機能襪</a>
                                <a class="dropdown-item" href="#">五指運動襪</a>
                                <a class="dropdown-item" href="#">銀纖維襪</a>
                                <a class="dropdown-item" href="#">天然棉襪</a>
                                <a class="dropdown-item" href="#">壓力襪</a>
                            </div>
                            <div class="d-flex flex-column">
                                <a class="dropdown-header"><b>內著</b></a>
                                <a class="dropdown-item" href="#">內衣</a>
                                <a class="dropdown-item" href="#">內褲</a>
                            </div>
                            <div class="d-flex flex-column">
                                <a class="dropdown-header"><b>配件</b></a>
                                <a class="dropdown-item" href="#">護具</a>
                            </div>
                            <a class="dropdown-header"><b>其他商品</b></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown h5" href="#" id="DropdownMenuWomen" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        女款
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="d-flex flex-row">
                            <a class="dropdown-header"><b>新品上市</b></a>
                            <div class="d-flex flex-column">
                                <a class="dropdown-header"><b>襪子</b></a>
                                <a class="dropdown-item" href="#">抗臭機能襪</a>
                                <a class="dropdown-item" href="#">抗菌機能襪</a>
                                <a class="dropdown-item" href="#">五指運動襪</a>
                                <a class="dropdown-item" href="#">銀纖維襪</a>
                                <a class="dropdown-item" href="#">天然棉襪</a>
                                <a class="dropdown-item" href="#">壓力襪</a>
                                <a class="dropdown-item" href="#">絲襪</a>
                            </div>
                            <div class="d-flex flex-column">
                                <a class="dropdown-header"><b>內著</b></a>
                                <a class="dropdown-item" href="#">內衣</a>
                                <a class="dropdown-item" href="#">內褲</a>
                            </div>
                            <div class="d-flex flex-column">
                                <a class="dropdown-header"><b>配件</b></a>
                                <a class="dropdown-item" href="#">護具</a>
                            </div>
                            <a class="dropdown-header"><b>其他商品</b></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown h5" href="#" id="DropdownMenuKid" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        兒童
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="d-flex flex-row">
                            <a class="dropdown-header"><b>新品上市</b></a>
                            <div class="d-flex flex-column">
                                <a class="dropdown-header"><b>襪子</b></a>
                                <a class="dropdown-item" href="#">抗臭機能襪</a>
                                <a class="dropdown-item" href="#">抗菌機能襪</a>
                                <a class="dropdown-item" href="#">五指運動襪</a>
                                <a class="dropdown-item" href="#">銀纖維襪</a>
                                <a class="dropdown-item" href="#">天然棉襪</a>
                                <a class="dropdown-item" href="#">壓力襪</a>
                                <a class="dropdown-item" href="#">絲襪</a>
                            </div>
                            <div class="d-flex flex-column">
                                <a class="dropdown-header"><b>內著</b></a>
                                <a class="dropdown-item" href="#">內衣</a>
                                <a class="dropdown-item" href="#">內褲</a>
                            </div>
                            <div class="d-flex flex-column">
                                <a class="dropdown-header"><b>配件</b></a>
                                <a class="dropdown-item" href="#">護具</a>
                            </div>
                            <a class="dropdown-header"><b>其他商品</b></a>
                        </div>
                    </div>
                </li>

                <a class="nav-item nav-link h5" href="#">禮物</a>
                <a class="nav-item nav-link h5" href="#">DIY娃娃</a>
            </ul>
            <div class="d-flex flex-column">
                <form class="form-inline navbar-right">
                    <a class="nav-link text-secondary" href="#">線上詢問</a>
                    <a class="nav-link text-secondary" href="#">購物說明</a>
                    <input class="form-control mr-sm-2" type="search" placeholder="請輸入關鍵字" aria-label="Search">
                    <button class="btn btn-outline-custom" type="submit">搜尋</button>
                </form>
                <div class="d-flex flex-row justify-content-end">
                    @if (Auth::check())
                    <a class="nav-link text-secondary" href="{{ url("Account/Logout") }}">登出</a>
                    @else
                    <a class="nav-link text-secondary" href="{{ url("Account/Account_Log_In") }}">登入</a>
                    @endif
                    <a class="nav-link text-secondary" href="#" id="ShoppingCart">購物車</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<div id="Dialog">
    <!--購物車版面配置-->
    <h1 class="text-center p-3 mt-1">LOHO 您的購物車</h1>
    <div class="container-fluid  p-2 mt-4">
        <div class="row">
            <div class="col-6 ml-2 text-center">
                <h4 class="font-weight-bold">商品名稱</h4>
            </div>
            <div class="col text-center">
                <h4 class="font-weight-bold">尺寸</h4>
            </div>
            <div class="col text-center">
                <h4 class="font-weight-bold">數量</h4>
            </div>
            <div class="col text-center">
                <h4 class="font-weight-bold">小計</h4>
            </div>
        </div>
        <div class="row" id="showBlock"></div>
        <div class="alert alert-secondary" role="alert">
            <div class="row">
                共<span id=count></span>項商品，金額總計
                <p class="text-danger" id="total"></p>元
            </div>
        </div>
    </div>
</div>
<script>
    //add the item dynamically

    var defaultCart = function () {
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
    var Item_removed = function (id)) {
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

</script>
<script>
    var txtID = 1;

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
                        }
                    }
                }
            });
        });
    }

</script>
<script>
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

</script>
<script>
    $(document).ready(function () {

        let initial_name = $('#name').text();
        let initial_price = $('#price').text();
        let initial_quantity = parseInt(document.getElementById("quantity").value);
        let initial_total = initial_price * initial_quantity;

        setTotalandCount(initial_quantity, initial_total);

        $("input").on("change", function (event) {
            let click_count = parseInt(document.getElementById("quantity").value);

            if (click_count < 1) {
                document.getElementById("quantity").value = 1;
                click_count = parseInt(document.getElementById("quantity").value);
            }
            let click_price = $('#price').text();
            let click_total = click_price * click_count;
            setTotalandCount(initial_quantity, click_total);

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

</script>
