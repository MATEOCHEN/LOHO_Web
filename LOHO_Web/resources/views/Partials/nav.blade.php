<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="/LOHO_Web/public/js/Shopping/ShoopingCart.js"></script>
<div id = "nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="{{ url("/") }}">
            <img alt="Brand" src="<?php echo asset('/Image/LOGO.svg');?>" width="150px" height="70spx">
        </a>                  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown text-JhengHei">
                <a class="nav-link  h5"   href="#"  id="DropdownMenuAboutLoho" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                關於LOHO 
                </a>
                <div class="dropdown-menu text-JhengHei" id="aboutmegamenu" aria-labelledby="navbarDropdown">
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
    
    
                <a class="nav-item nav-link h5 text-JhengHei" href="{{ url("Shopping/BrowseItems") }}">精選主題</a>
    
                <li class="nav-item dropdown text-JhengHei">
                    <a class="nav-link dropdown h5" href="#" id="DropdownMenuMen" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    男款
                    </a>
                    <div class="dropdown-menu" id="menmegamenu" aria-labelledby="navbarDropdown">
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
                <li class="nav-item dropdown text-JhengHei">
                    <a class="nav-link dropdown h5" href="#" id="DropdownMenuWomen" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    女款
                    </a>
                    <div class="dropdown-menu" id="womenmegamenu" aria-labelledby="navbarDropdown">
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
                <li class="nav-item dropdown text-JhengHei">
                    <a class="nav-link dropdown h5" href="#" id="DropdownMenuKid" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    兒童
                    </a>
                    <div class="dropdown-menu" id="childmegamenu"aria-labelledby="navbarDropdown">
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
            <div class="d-flex flex-column text-JhengHei">
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
                    <a class="nav-link text-secondary"  href="#" id="ShoppingCart">購物車</a>	
                </div>
            </div>
        </div>
    </nav>
</div>
<div id ="Dialog">
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
          <div class ="row" id="showBlock"></div>
        <div class="alert alert-secondary" role="alert">
            <div class="row">
                共<span id = count></span>項商品，金額總計
                <p class="text-danger" id="total"></p>元
                <span><button type="button" id="checkOut" class="btn btn-outline-custom btn-sm text-right">結帳</button></span>
            </div>
        </div>
    </div>
</div>




