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
              <li class="active"><a href="#">About</a></li>
              <li><a href="service1.php">Support Service</a></li> 
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
        <h1 style="font-family: demo; font-size: 50px;">Profile</h1>
        </div>
        </div>
        <br>
        <hr>
        <div class="row text-center">
          <div class="col-sm-4">
            <a href="about.php">
            <span class="glyphicon glyphicon-globe logo-small"></span>
          
            <h4 style="font-family: demo; font-size: 25px;">About</h4>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="profile.php">
            <span class="glyphicon glyphicon-user logo-small"></span>
         
            <h4 style="font-family: demo; font-size: 25px;">Profile</h4>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="contact.php">
            <span class="glyphicon glyphicon-earphone logo-small"></span>
         
            <h4 style="font-family: demo; font-size: 25px;">Contact</h4>
            </a>
          </div>
          </div>
      </div>
      <br><br>
      <div class="container">
          <div class="row">
            <div class="col-sm-4" >
              <img src="img/Logo.png" class="img-circle" alt="random-name"> 
            </div>
            <div class="col-sm-8" style="text-align: justify;">
              <h2>Bengkel TI Unida</h2>
              <h4><strong>MISSION:</strong> Mengatasi permasalahan mahasiswa dalam hal komputer maupun laptop
            masalah hardware maupun software. Sehingga mahasiswa tidak perlu keluar kampus hanya untuk
            memperbaiki komputer, laptop, maupun printer cukup membawa ke Bengkel TI Unida. </h4> 
              <p><strong>VISION:</strong> Mahasiswa akan lebih terasah pengalaman kerjanya karena di 
            Bengkel TI Unida mahasiswa akan belajar sambil bekerja dan di tuntut untuk bisa dan belajar sendiri. </p>
            </div>
          </div>
        </div>
        <br><br>
      <div class="container text-center">
            <br>
            
            <div class="col-sm-3" style="padding-top: 60px;">
                <a href="#demo" data-toggle="collapse">
              <img src="img/profile6.JPG" class="img-circle person" alt="Random Name">
            </a>
            <div id="demo" class="collapse">
                <p>Muhammad Zahirrudin</p>
                <p>Ketua Bengkel TI Unida</p>
                <p>Teknisi Ahli</p>
              </div>
            </div>
              <div class="col-sm-3" style="padding-top: 60px;">
                  <a href="#demo1" data-toggle="collapse">
                <img src="img/profile1.JPG" class="img-circle person" alt="Random Name">
              </a>
              <div id="demo1" class="collapse">
                  <p>Kukuh Prasetyo Wibowo</p>
                  <p>Bendahara Bengkel TI Unida</p>
                  <p>Teknisi Ahli</p>
                </div>
              </div>
              <div class="col-sm-3" style="padding-top: 60px;">
                  <a href="#demo2" data-toggle="collapse">
                <img src="img/profile4.JPG" class="img-circle person" alt="Random Name">
              </a>
              <div id="demo2" class="collapse">
                  <p>Muhammad Khoironi Subagio</p>
                  <p>Perlengkapan Bengkel TI Unida</p>
                  <p>Teknisi Ahli</p>
                </div>
              </div>
              <div class="col-sm-3" style="padding-top: 60px;">
                  <a href="#demo3" data-toggle="collapse">
                <img src="img/profile2.JPG" class="img-circle person" alt="Random Name">
              </a>
              <div id="demo3" class="collapse">
                  <p>Akhmad Trisna Wijaya</p>
                  <p>Anggota Bengkel TI Unida</p>
                  <p>Teknisi Pembantu</p>
                </div>
              </div>
        </div>
        <div class="container text-center">
                <div class="col-sm-3" style="padding-top: 60px;">
                    <a href="#demo4" data-toggle="collapse">
                  <img src="img/profile3.JPG" class="img-circle person1" alt="Random Name">
                </a>
                <div id="demo4" class="collapse">
                    <p>Muhammad fakru Alfa Rizqi</p>
                    <p>Desainer Bengkel TI Unida</p>
                    <p>Bagian Software</p>
                  </div>
                </div>
                <div class="col-sm-3" style="padding-top: 60px;">
                    <a href="#demo5" data-toggle="collapse">
                  <img src="img/profile5.JPG" class="img-circle person1" alt="Random Name">
                </a>
                <div id="demo5" class="collapse">
                    <p>Arief Fathul Hikam</p>
                    <p>Anggota Bengkel TI Unida</p>
                    <p>Bagian Software</p>
                  </div>
                </div>
                <div class="col-sm-3" style="padding-top: 60px;">
                    <a href="#demo6" data-toggle="collapse">
                  <img src="img/profile7.JPG" class="img-circle person1" alt="Random Name">
                </a>
                <div id="demo6" class="collapse">
                    <p>Muhammad Rizal Muttaqien</p>
                    <p>Desainer Bengkel TI Unida</p>
                    <p>Teknisi Suport</p>
                  </div>
                </div>
                <div class="col-sm-3" style="padding-top: 60px;">
                    <a href="#demo7" data-toggle="collapse">
                  <img src="img/profile8.JPG" class="img-circle person" alt="Random Name">
                </a>
                <div id="demo7" class="collapse">
                    <p>Adi Darmanto</p>
                    <p>Anggota Bengkel TI Unida</p>
                    <p>Teknisi Suport</p>
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