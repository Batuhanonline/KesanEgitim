<?php
  $reklamlar = array();

  $reklamlar[0]["isim"] = "PHP";
  $reklamlar[0]["icerik"] = "PHP web tabanlı bir programlama dilidir.";
  $reklamlar[0]["resim"] = "http://www.vtrain.co.in/wp-content/uploads/2018/04/PHP.jpg";

  $reklamlar[1]["isim"] = "Java";
  $reklamlar[1]["icerik"] = "Java bir programlama dilidir.";
  $reklamlar[1]["resim"] = "https://images.techhive.com/images/article/2013/02/oracle_java-100026145-orig.jpg";

  $reklamlar[2]["isim"] = "Dart";
  $reklamlar[2]["icerik"] = "Dart'ı duran önerdi ekledik";
  $reklamlar[2]["resim"] = "https://www.houseofbots.com/images/news/11477/cover.png";

  $SOL = rand(0, 2);
  $SAG = rand(0, 2);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>KEMAL</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> <!-- Navbar Bitiş -->

    <div class="container mt-5">
      <div class="row">
      <div class="col-sm-12 col-md-3">
        <div class="card" style="width: 100%;">
          <img src="<?php echo $reklamlar[$SOL]['resim'];?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $reklamlar[$SOL]['isim'];  ?></h5>
            <p class="card-text"><?php echo $reklamlar[$SOL]['icerik']; ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

     </div>
      <div class="col-md-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://i0.wp.com/ares.shiftdelete.net/580x330/original/2018/07/phyton-e1532601247475.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://opensource.com/sites/default/files/styles/image-full-size/public/lead-images/tux_linux_penguin_code_binary.jpg?itok=TxGxW0KY" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://iasbh.tmgrup.com.tr/c64ad0/752/395/0/27/768/431?u=https://isbh.tmgrup.com.tr/sbh/2018/04/10/windows-10-kullanicilarina-onemli-uyari-1523388049124.jpg" class="d-block w-100" alt="...">
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
      <div class=" col-xs-12 col-sm-12 col-md-3">
          <div class="card" style="width: 100%;">
          <img src="<?=$reklamlar[$SAG]['resim']?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?=$reklamlar[$SAG]['isim']?></h5>
            <p class="card-text"><?=$reklamlar[$SAG]['icerik']?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
      </div>
    </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
