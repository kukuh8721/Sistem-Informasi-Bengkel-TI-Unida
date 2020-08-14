<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styleabout.css">
    <link rel="stylesheet" href="css/setelahlogin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    
</head>
<body>
      <nav class="navbar navbar-defauld">
            <div class="container">
          <div class="navbar-header">
            <a href="homelogin.php">
              <img class="navbar-brand logo-web" src="img/Logo.png"  alt=""> </a>
              <a class="navbar-brand judul" href="homelogin.php">Bengkel TI Unida</a>
          </div>
          <ul class="nav navbar-nav about">
              <li><a href="homelogin.php">Home</a></li>
              <li><a href="aboutlogin.php">About</a></li>
              <li class="active"><a href="servicelogin.php">Support Service</a></li> 
              <li><a href="aksesorislogin.php">Our Store</a></li> 
          </ul>
          <ul class="nav navbar-nav navbar-right login">
                    
                <li class="dropdown"><a class=" dropdown-toggle" id="menu1" data-toggle="dropdown" >
                  <span class="glyphicon glyphicon-user">&nbsp;MOCH.KHOLIL&nbsp;<span class="caret"></span></span></a>
                    
                    <ul class="dropdown-menu jancok" role="menu" aria-labelledby="menu1" >
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Panel Akun</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Status Service</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Complain dan Pengembalian</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Logout</a></li>
                          </ul>
                          </li>
          </ul>
         </div>
      </nav>
      
      <div class="container-fluit">
      <div class="col-md-offset" >
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/slide_1.jpg" alt="Los Angeles">
            </div>

            <div class="item">
              <img src="img/slide_2.jpg" alt="Chicago">
            </div>
        
            <div class="item">
              <img src="img/slide_3.jpg" alt="New York">
            </div>
          </div>
        
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="text-center">
            <h1 style="font-family: demo; font-size: 50px;">Instalasi Komputer</h1>
          </div>
          </div>
            <br>
            <hr>
            <div class="row text-center">
              <div class="col-sm-4">
                <a href="service1.php">
                <img class="service" src="img/icon1.png" alt="">
              
              
                <h4 style="font-family: demo; font-size: 25px;">Instalasi Komputer</h4></a>
              </div>
              <div class="col-sm-4">
                <a href="service2.php">
                <img class="service" src="img/icon2.png" alt="">
              
                <h4 style="font-family: demo; font-size: 25px;">Service Komputer</h4></a>
              </div>
              <div class="col-sm-4">
                <a href="service3.php">
                <img class="service" src="img/icon3.png" alt="">
              
                <h4 style="font-family: demo; font-size: 25px;">Service Printer</h4></a>
              </div>
              </div>
          </div>
          <br><br>
        
          <div class="container">
                <div class="row">
                  <div class="col-sm-4" >
                    <img src="img/icon1.png" class="img-circle" alt="random-name"> 
                  </div>
                  <div class="col-sm-8">
                    <h2>Instalasi Komputer</h2>
                    <h4>Bengkel TI Unida melayani segala jenis instalasi operating system 
                      mulai dari Windows sampai linux. Tidak hanya operating system saja
                      tetapi Bengkel TI Unida juga melayani insatalasi segala macam aolikasi komputer. <br>
                      Bengkel TI Unida tidak bisa mematok untuk harga setiap servicenya karena beda harga akan menyesuaikan
                      seberapa rumit instalasi yang di lakukan.
                    </h4>
                  </div>
                </div>
              </div>
             
              <br><br>
    </body>
    <br>
<br>
<footer>
  <div class="navbar navbar-inverse" style="background-color:rgb(14, 165, 235);">
    <div class="container-fluit">
      <p class="text-center" style="color:white">Copyright © Bengkel TI Unida 2019. All right reserved</p>
    </div>
  </div>
</footer>
    </html>