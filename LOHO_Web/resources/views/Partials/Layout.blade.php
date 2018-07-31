
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--My All CSS-->
    <link href=<?php echo asset('/css/All.css');?> rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href=<?php echo asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');?> integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB') }}" rel="stylesheet" type="text/css" />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src= <?php echo asset('https://code.jquery.com/jquery-3.3.1.slim.min.js');?>
        crossorigin="anonymous"></script>
    <script src=<?php echo asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49');?>
        crossorigin="anonymous"></script>
    <script src=<?php echo asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T');?>
        crossorigin="anonymous"></script>
    <title>LOHO_Layout</title>
</head>

<body>
    <header class="header">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="header-box">
            購物說明
        </div>
        <div class="header-box">
            線上詢問
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="LOHO_Logo.PNG" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item nav-item-block">
                    <a class="nav-link" href="#">
                        <span class="nav-link-font">
                            關於LOHO
                        </span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item nav-item-block">
                    <a class="nav-link" href="#">
                        <span class="nav-link-font">
                            精選主題
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-block">
                    <a class="nav-link" href="#">
                        <span class="nav-link-font">
                            男生
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-block">
                    <a class="nav-link" href="#">
                        <span class="nav-link-font">
                            女生
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-block">
                    <a class="nav-link" href="#">
                        <span class="nav-link-font">
                            小孩
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-block">
                    <a class="nav-link" href="#">
                        <span class="nav-link-font">
                            禮物
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-block">
                    <a class="nav-link" href="#">
                        <span class="nav-link-font">
                            DIY娃娃
                        </span>
                    </a>
                </li>
            </ul>

        </div>
    </nav>
</body>

