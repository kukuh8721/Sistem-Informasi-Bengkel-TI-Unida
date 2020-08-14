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
              <li><a href="homelogin.php">Home</a></li>
              <li class="active"><a href="aboutlogin.php">About</a></li>
              <li><a href="service1.php">Support Service</a></li> 
              <li><a href="aksesoris.php">Our Store</a></li> 
          </ul>
          <ul class="nav navbar-nav navbar-right login">
                    
                    <li class="dropdown"><a class=" dropdown-toggle" id="menu1" data-toggle="dropdown" >
                      <span class="glyphicon glyphicon-user">&nbsp;MOCH.KHOLIL&nbsp;<span class="caret"></span></span></a>
                        
                        <ul class="dropdown-menu jancok" role="menu" aria-labelledby="menu1" >
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Panel Akun</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Status Service</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Complain dan Pengembalian</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="login.php">Logout</a></li>
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
        <h1 style="font-family: demo; font-size: 50px;">Contact</h1>
        </div>
        </div>
        <br>
        <hr>
        <div class="row text-center">
          <div class="col-sm-4">
            <a href="aboutlogin.php">
            <span class="glyphicon glyphicon-globe logo-small"></span>
          
            <h4 style="font-family: demo; font-size: 25px;">About</h4>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="profilelogin.php">
            <span class="glyphicon glyphicon-user logo-small"></span>
          
            <h4 style="font-family: demo; font-size: 25px;">Profile</h4>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="contactprofile.php">
            <span class="glyphicon glyphicon-earphone logo-small"></span>
          
            <h4 style="font-family: demo; font-size: 25px;">Contact</h4>
            </a>
          </div>
          </div>
      </div>
      <br><br>
      <div class="container text-center">
            <!-- <h4 class="text-center">Jika Ingin Menghubingi Kami Bisa Melalui Nomor</h4>
            <br>
            <p>Looking to spend some time at the Mercer Warhouse? We'd love to hear from you! Feel free to contact</p>
            <p>us at any of the links below , and we will get back to you as soon as possible</p> -->
            <br><br>
            <div class="row">
                <div class="col-md-4">
                  <a href="#">
                    <span class="glyphicon glyphicon-phone "> PHONE : 081298546303 </span>
                  </a>
                </div>
              <div class="col-md-4">
                <a href="#">
                <span class="glyphicon glyphicon-envelope "> BENGKELTIUNIDA@GMAIL.COM </span>
                </a>
            </div>
            <div class="col-md-4">
              <a href="#">
              <span class="glyphicon glyphicon-modal-window "> @BENGKELTIUNIDA </span>
              </a>
        </div>
      </div>
      </div>
      <br><br>
      <div class="container ">
          <img src="img/bareng.JPG" class="img-circle logo-contact" alt="right">
      <div class="col-md-8 contact">
          <div class="row">
            <div class="col-md-6 form-group">
              <p> Name : </p>
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-md-6 form-group">
              <p> Email : </p>
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
            </div>
            <br>
              <div class="col-md-12 contact1">
                  <div class="row">
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
            <div class="col-md-14 form-group ">
              <button class="btn btn-default pull-right" type="submit">Send</button>
            </div>
          </div> 
        </div>
        </div>
        </div>
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
