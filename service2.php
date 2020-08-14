<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styleabout.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    
</head>
<body>
      <nav class="navbar navbar-defauld">
            <div class="container">
          <div class="navbar-header">
            <a href="home.php">
              <img class="navbar-brand logo-web" src="img/Logo.png"  alt=""> </a>
              <a class="navbar-brand judul" href="home.php">Bengkel TI Unida</a>
          </div>
          <ul class="nav navbar-nav about">
              <li><a href="home.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li class="active"><a href="service.php">Support Service</a></li> 
              <li><a href="aksesoris.php">Our Store</a></li> 
          </ul>
          <ul class="nav navbar-nav navbar-right login">
          <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
            <h1 style="font-family: demo; font-size: 50px;">Service Komputer</h1>
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
                    <img src="img/icon2.png" class="img-circle" alt="random-name"> 
                  </div>
                  <div class="col-sm-8">
                    <h2>Service Komputer</h2>
                    <h4>Service Komputer di Bengkel TI Unida melayani berbagai jenis kerusakan mulai dari 
                      mati total, hardisk tidak terbaca, port USB rusak, dan lain sebagainya. <br>
                      Untuk Biaya service komputer relative tergantung kerusakan dan proses pengerjaanya. Semakin
                      susah proses pengerjaanya maka biayanya juga semakin mahal.
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