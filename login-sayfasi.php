<?php
$kullanici='b211210026'.'@'.'sakarya.edu.tr';
$sifree='b211210026';


if(isset($_POST['email'])){
    $kullaniciAdi=$_POST['email'];
    $sifre=$_POST['sifre'];

    if($kullaniciAdi==$kullanici&&$sifree==$sifre){
        echo "<script>alert('Giriş Yapıldı');</script>";
        header("Location: login-basarili.html");
        exit;
    }
    else{
        echo "<script>alert('Giriş Yapılamadı');</script>";
    }
}

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <title>Login Sayfasi</title>
</head>

<body class="fontt renk">


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fontt">
        <a class="navbar-brand " href="#index.html">Veysel Aras</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.html">Hakkımda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="sehrim.html">Şehrim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="ozgecmis.html">Özgeçmiş</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login-sayfasi.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="container ortalama renk2 ">

    <form id="formm" method="POST" action="">
        <div class="form-group ">
          <label for="exampleInputEmail1" class="mt-5">Email Adresi:</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Şifre:</label>
          <input type="password" class="form-control" name="sifre" required>
        </div>
        <br><br>
        <button type="submit" class="btn btn-dark mb-5">Gönder</button>
      </form>
    
    </div>



    <footer class="bg-dark p-5 text-white text-center mt-5">

        <a href="https://www.instagram.com/elonmusk/?hl=en" target="_blank"><i class="fab fa-instagram iconlar mx-3"
                style="color: #ffffff;"></i></a>
        <a href="https://www.facebook.com/zuck/" target="_blank"><i class="fab fa-facebook iconlar mx-3"
                style="color: #ffffff;"></i></a>
        <a href="https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i
                class="fab fa-twitter-square iconlar mx-3" style="color: #ffffff;"></i></a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>

</body>

</html>