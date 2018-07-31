<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link href="{{ URL::asset('/css/All.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('/css/Index.css') }}" rel="stylesheet" type="text/css" />
  <title>LOHO_Index</title>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
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
      <img src="../LOHO-Project//Image/LOHO_Logo.PNG" alt="">
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
  <div class="content">
    <div class="container-fluid py-5">
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide container-fluid" data-ride="carousel ">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 img-fluid" src="https://images.unsplash.com/photo-1518023176010-e14eb57eecf9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fe2f72ca42e6478bc869b8325881fa46&auto=format&fit=crop&w=1050&q=80"
                alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="https://images.unsplash.com/photo-1518023176010-e14eb57eecf9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fe2f72ca42e6478bc869b8325881fa46&auto=format&fit=crop&w=1050&q=80"
                alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="https://images.unsplash.com/photo-1518023176010-e14eb57eecf9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fe2f72ca42e6478bc869b8325881fa46&auto=format&fit=crop&w=1050&q=80"
                alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div>
      <h1 class="text-center">精選推薦</h1>
    </div>
    <div class="wrap">
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h1 class="text-center">新品上市</h1>
    </div>
    <div class="wrap">
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>
</body>