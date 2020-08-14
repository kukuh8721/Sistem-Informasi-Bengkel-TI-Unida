<?php
@session_start();
include "php/koneksi.php";

// if(@$_SESSION['admin'] || @$_SESSION['teknisi']){
//     header("location: input.php");
// }else if(@$_SESSION['user']){
//     header("location: input.php");
// }else{

// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css?v=0.2;">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
    <div id="utama" style="margin-top: 5%;">
        <div id="judul">
            Login
        </div>
        <div id="inputan">
            <form action="" method="POST">
                <div>
                    <input type="text" name="user" placeholder="Username" class="lg">
                </div>
                <div style="margin-top: 10px;">
                    <input type="password" name="pass" placeholder="Password" class="lg">
                </div>
                <div style="margin-top: 10px">
                    <input type="submit" name="login" value="LOGIN" class="btn">
                </div>
            </form>
            <?php
            $user= @$_POST['user'];
            $pass= @$_POST['pass'];
            $login= @$_POST['login'];

            if($login){
                if($user == '' || $pass == ''){
                    ?><script type="text/javascript">alert("Username Atau Password Tidak Boleh Kosong");</script><?php
                }else{
                    $sql= mysql_query("select*from login where username = '$user' and password = md5('$pass')") or die(mysql_error());
                    $data=mysql_fetch_array($sql);
                    $cek=mysql_num_rows($sql);
                    if($cek > 0){
                        if($data['level'] == 'admin'){
                            @$_SESSION['admin'] = $data['kode_user'];
                            header("location: homelogin.php");
                        }else if($data['level'] == 'teknisi'){
                            @$_SESSION['teknisi'] = $data['kode_user'];
                            header("location: homelogin.php");
                        }else if($data['level'] == 'user'){
                            @$_SESSION['user'] = $data['kode_user'];
                            header("location: homelogin.php");
                        }
                    }else{
                        ?><script type="text/javascript">alert("Login gagal, Uasername atau Password Salah. Silahkan Coba Lagi")</script><?php
                    }    
                    }
                }
            ?>
        </div>
    </div>
    
</body>
<footer style="padding-top: 220px;">
  <div class="navbar navbar-inverse" style="background-color:rgb(14, 165, 235);">
    <div class="container-fluit">
      <p class="text-center" style="color:white">Copyright © Bengkel TI Unida 2019. All right reserved</p>
    </div>
  </div>
</footer>
</html>