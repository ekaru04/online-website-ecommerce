<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';
date_default_timezone_set('Asia/Jakarta');
session_start();


@$sess = $_SESSION['username'];

$tgl = date("d-m-y");
$sql = "SELECT expired FROM tb_laundry WHERE username = '$sess'";
$result = mysqli_query($conn, $sql);
$info = mysqli_fetch_assoc($result);
$dueExpire = round((strtotime($info['expired']) - time()) / 86400);
// time() = waktu sekarang
// 86400 = 60 detik * 60 menit * 24 jam
// round = pembulatan
    if(strtotime(date("Y-m-d")) < strtotime($info['expired'])){
        if($dueExpire <= 7 ){
          echo "<h6>Dalam $dueExpire hari lapak otomatis terhapus, silahkan lakukan perpanjangan</h6>";  
        }
    }
    else if($sess != null){
      ?>
        <div class="alert alert-danger">Expired</div>
      <?php
    }
          // echo "<h6>".date("d-m-y")."</h6>";
      ?>

<?php

$msg = @$_GET['msg'];
if($msg == "berhasil"){
  echo "<h4>password telah diganti</h4>";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clean in Click</title>
	<link rel="icon" href="images/icon.jpg" type="images/icon.jpg">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
    <style>
      .customImages{
        height: 250px;
        width: 100%;
        overflow: hidden;
      }
    </style>
  </head>
  <body>
    <!-- navbar-->
    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________

      -->    
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm" disabled><?php echo date("Y-m-d");?></a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
              <?php if(@$sess == null){ ?>
                <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Masuk</a></li>
                <li class="list-inline-item"><a href="register.php">Daftar</a></li>
              <?php }else{ ?>
                <li class="list-inline-item"><a href="customer-account.php"><?php echo @$_SESSION['username']; ?></a></li>
                <li class="list-inline-item"><a href="pembayaran2.php">Pembayaran</a></li>
                <li class="list-inline-item"><a href="keluar_aksi.php">Keluar</a></li>
              <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Customer login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="cek_login.php" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="username" name="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="password" name="password" class="form-control">
                  </div>
                  <a href="lupapass.php">Lupa password?</a>
                  <p class="text-center">
                    <button class="btn btn-primary" type="submit" name="login"><i class="fa fa-sign-in"></i> Log in</button>
                  </p>
                </form>
                
          <!-- mengambil data dari dtabase untuk login  -->
              </div>
            </div>
          </div>r
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      
      <?php include "navbar.php" ?>

    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="img/laundry.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="img/godai.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="img/main-slider3.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="img/main-slider4.jpg" alt="" class="img-fluid"></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">EFISIEN</a></h3>
                  <p class="mb-0">We are known to provide best possible service ever</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">TERPERCAYA</a></h3>
                  <p class="mb-0">Hoax :vosss</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">TERJANGKAU</a></h3>
                  <p class="mb-0">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div class="container">
            <div class="row">


            <?php 

          		// $query_mysql = mysqli_query($conn, "SELECT * FROM tb_laundry ORDER BY RAND() LIMIT 6")or die(mysql_error());
              $query_mysql = mysqli_query($conn, "SELECT * FROM tb_laundry")or die(mysql_error());

              $qs = mysqli_query($conn, "SELECT DISTINCT id_foto_laundry, foto FROM tb_foto_laundry GROUP BY id_foto_laundry ORDER BY id_foto_laundry");
          		$nomor = 1;
          		while($data = mysqli_fetch_array($query_mysql)){

          	?>
    <!-- berfungsi untuk menginclude dengan menggunakan koneksi agar katalog sama dengan tampilan -->
              <a href="lapak.php?id=<?php echo $data['username']; ?>">
              <div class="item col-md-4">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <?php
                      $usernameF = $data['username'];
                       $query_foto = mysqli_query($conn, "SELECT * FROM tb_foto_laundry INNER JOIN tb_laundry ON tb_laundry.id_foto_laundry = tb_foto_laundry.id_foto_laundry WHERE tb_laundry.username = '$usernameF' GROUP BY tb_foto_laundry.id_foto_laundry")or die(mysqli_error($conn));
                       
                            while($dat = mysqli_fetch_array($query_foto)){ ?>

                      <div class="front">
                        <a href="lapak.php?id=<?php echo $dat['username']; ?>">
                          <img src="img/<?= $dat['foto'] ?>" alt="" class="img-fluid customImages">
                        </a>
                      </div>
                      <div class="back">
                        <a href="lapak.php?id=<?php echo $dat['username']; ?>">
                          <img src="img/<?= $dat['foto'] ?>" alt="" class="img-fluid customImages">
                        </a>
                      </div>
                      <?php } ?>
                    </div>
                  </div><a href="lapak.php?id=<?php echo $data['username']?>" class="invisible"><img src="img/laundry.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="lapak.php?id=<?php echo $data['username']?>"><?= $data['nama_laundry'] ?></a></h3>
                    <p class="price"> 
                      <del></del> <?php echo $data['alamat']; ?>
                    </p>
                  </div>
                </div>
                <!-- /.product-->
              </div>
    <?php } ?>
              <!-- /.product-slider-->
            </div>
            <!-- /.container-->
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
        <div class="container">
          <div class="col-md-12">
            <div class="box slideshow">
              <h3>Get Inspired</h3>
              <p class="lead">Get the inspiration from our world class designers</p>
              <div id="get-inspired" class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img src="img/getinspired1.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="img/getinspired2.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="img/getinspired3.jpg" alt="Get inspired" class="img-fluid"></a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- *** GET INSPIRED END ***-->
        <!--
        *** BLOG HOMEPAGE ***
        _________________________________________________________
        -->
        <div class="box text-center">
          <div class="container">
            <div class="col-md-12">
              <h3 class="text-uppercase">COBA APLIKASI CLEAN IN CLICK</h3>
              <p class="lead mb-0">Mau laundry ?<br> Tidak ingin keluar kamar untuk mencari laundry yang cocok ?<br> Cari laundry yang cocok buat mu di CLEAN IN CLICK!</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-12">
            <div id="blog-homepage" class="row">
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">Fashion now</a></h4>
                  <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a></p>
                  <hr>
                  <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">Who is who - example blog post</a></h4>
                  <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a></p>
                  <hr>
                  <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
                </div>
              </div>
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div>
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <?php include "footer.php" ?>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
   
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script>
      const status = <?php echo $_GET['pesan'] == "expired" ? "true" : "false"; ?>;
      const statusTenggat = <?php 
                                if(isset($_GET['tenggat']))
                                {
                                  if((int)$_GET['tenggat'] <= 0){
                                    echo "false";
                                  }
                                  else{
                                    echo "true";
                                  }
                                }else
                                {
                                  echo "false";
                                }
                          ?>;
      if(status == true && statusTenggat == false){
        swal("Peringatan", "Masa berlaku akun anda sudah habis, akun anda akan segera di nonaktifkan."+
          "Harap segera membayar untuk memperpanjang masa aktif akun anda.");
      }else if(statusTenggat == true)
      {
        swal("Peringatan", "Masa berlaku akun anda akan habis dalam "+<?= isset($_GET['tenggat']) ? $_GET['tenggat'] : "0"; ?>+" Hari, akun anda di nonaktifkan."+
                  "Harap segera membayar untuk memperpanjang masa aktif akun anda.");
      }

    </script>
   

    
  </body>
</html>