<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css?v=1.3;">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script> 
</head>
<body>
    <nav class="navbar navbar-defauld">
        <div class="container">
            <div class="navbar-header">
                <a href="home.php">
                    <img class="navbar-brand logo-web" src="img/Logo.png" alt="">
                </a>
                <a class="navbar-brand judul" href="home.php">Bengkel TI Unida</a>
            </div>
        </div>
    </nav>
    <div id="utama" style="margin-top: 1%;">
        <div id="judul">
            Sign Up
        </div>
        <div id="inputan">
            <form action="" method="POST">
                <div>
                    <input type="text" name="user" placeholder="Username" class="lg">
                </div>
                <div style="margin-top: 10px;">
                    <input type="password" name="pass" placeholder="Password" class="lg">
                </div>
                <div style="margin-top: 10px;">
                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="lg">
                </div>
                <div style="margin-top: 10px;">
                    <input type="text" name="email" placeholder="Email" class="lg">
                </div>
                <div style="margin-top: 10px;">
                    <input type="submit" name="signup" value="Sign Up" class="btn">
                    <span style="margin-left: 120px;">
                        <a href="login.php" class="btn-right">Login</a>

                    </span>
                </div>
            </form>
            <?php
            include"php/koneksi.php";
            if(@$_POST['signup']){
                $user = @$_POST['user'];
                $pass = @$_POST['pass'];
                $nama_lengkap = @$_POST['nama_lengkap'];
                $email = @$_POST['email'];

                if($user == '' || $pass == '' || $nama_lengkap == ''){
                    ?> <script type="text/javascript">alert('Inputan Tidak Boleh Ada Yang kosong');</script><?php
                }else{
                    $sql_insert = mysql_query("insert into login values ('', '$user', md5('$pass'), '$nama_lengkap', '$email', 'user')") or die (mysql_error());
                    if($sql_insert){
                        ?> <script type="text/javascript">alert('Pendaftaran Berhasil Silahkan Login');</script><?php
                    }
                }
            }
            ?>
        </div>
    </div>
    
</body>
<br>
<br>
<footer style="padding-top: 120px;">
  <div class="navbar navbar-inverse" style="background-color:rgb(14, 165, 235);">
    <div class="container-fluit">
      <p class="text-center" style="color:white">Copyright © Bengkel TI Unida 2019. All right reserved</p>
    </div>
  </div>
</div>
</footer>

</html>