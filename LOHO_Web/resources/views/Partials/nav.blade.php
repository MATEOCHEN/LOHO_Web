<script>
        function getCart() {
            $(document).ready(function () {
                alert("您的商品");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });

            $.ajax({
                type: "GET",
                url: "http://localhost/LOHO_Web/public/Shopping/getCart",
                data: "",
                dataType: "json",
                success: function (response) {
                    
                    alert(response.item_name+" "+response.item_price+" "+response.item_count);
                }
            });
            });
        }

</script>
<div id = "nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="{{ url("/") }}">
            <img alt="Brand" src="<?php echo asset('/Image/LOGO.svg');?>" width="150px" height="70spx">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown h5" href="#"  id="DropdownMenuAboutLoho" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link dropdown h5" href="#" id="DropdownMenuMen" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    男款
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="d-flex flex-row">
                            <a class="dropdown-header" ><b>新品上市</b></a>
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
                    <a class="nav-link dropdown h5" href="#" id="DropdownMenuWomen" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link dropdown h5" href="#" id="DropdownMenuKid" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <form class="form-inline navbar-right" >
                    <a class="nav-link text-secondary" href="#">線上詢問</a>
                    <a class="nav-link text-secondary" href="#">購物說明</a>
                    <input class="form-control mr-sm-2" type="search" placeholder="請輸入關鍵字"aria-label="Search">
                    <button class="btn btn-outline-custom" type="submit">搜尋</button>
            </form>
                <div class="d-flex flex-row justify-content-end">
                    @if (Auth::check())
                    <a class="nav-link text-secondary" href="{{ url("Account/Logout") }}">登出</a>
                        @else
                        <a class="nav-link text-secondary" href="{{ url("Account/Account_Log_In") }}">登入</a>
                    @endif    
                    <div class="nav-link text-secondary" onclick="getCart()" style="cursor: pointer;">購物車</div>	
                </div>
            </div>
        </div>
    </nav>
</div>


