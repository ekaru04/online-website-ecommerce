<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';
date_default_timezone_set('Asia/Jakarta');
session_start();

@$sess = $_SESSION['username'];

$o = mysqli_query($conn, "SELECT * FROM tb_iklan");
$tu = mysqli_query($conn, "SELECT * FROM tb_laundry WHERE username='$sess'");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
            <script src="vendor/jquery/jquery.min.js"></script>
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
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm"><?php echo date("Y-m-d");?></a>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
              <?php if(@$sess == null){


                ?>
                <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Masuk</a></li>
                <li class="list-inline-item"><a href="register.php">Daftar</a></li>
              <?php }else{ ?>
                <li class="list-inline-item"><a href="/Rebellion/edit/customer-account.php"><?php echo @$_SESSION['username']; ?></a></li>
                <li class="list-inline-item"><a href="/Rebellion/pembayaran/pembayaran2.php">Pembayaran</a></li>
                <li class="list-inline-item"><a href="/Rebellion/keluar_aksi.php">Keluar</a></li>
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
                <form action="/Rebellion/cek_login.php" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="email" name="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="password" name="password" class="form-control">
                  </div>
                  <div class="form-group">
                  <p><a href="lupapass.php">lupa password?</a></p>                    
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary" type="submit" name="login"><i class="fa fa-sign-in"></i> Log in</button>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/navbar.php';?>

    </header>
    <div id="all">
      <div id="content">
        <!--
        *** ADVANTAGES HOMEPAGE ***
        
        _________________________________________________________
        -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Katalog Laundry</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="p-5">
          <div class="container">
            <div class="row">
            <?php 
                
                  $queryKategori = "SELECT DISTINCT(tb_laundry.nama_laundry), tb_laundry.* FROM tb_laundry INNER JOIN tb_detail_kategori ON tb_detail_kategori.id_laundry = tb_laundry.id_detail_kategori WHERE";
                  
                @$id_kategori = explode(",", $_GET['id']);

                  for($t = 0; $t <= count($id_kategori) - 1; $t++){
                    $queryKategori .= " tb_detail_kategori.id_kategori = ".$id_kategori[$t];
                    if($t != count($id_kategori) - 1){
                        $queryKategori .= " OR ";
                    }
                  }

                  //print_r($queryKategori);
                  // echo $queryKategori;
                  @$search = $_GET["search"];
                  @$listing = $_GET["listing"];

                  $query_mysql;

                  if(isset($id_kategori) && $id_kategori[0] != ""){
                    $query_mysql = mysqli_query($conn, $queryKategori)or die(mysqli_error($conn));
                  }
                  else if(isset($search)){
                    $query_mysql = mysqli_query($conn, "SELECT * FROM tb_laundry WHERE nama_laundry like '%$search%'")or die(mysqli_error($conn));
                  }else if(isset($listing)){
                    if($listing == "baru"){
                      $query_mysql = mysqli_query($conn, "SELECT * FROM tb_laundry ORDER BY id_laundry DESC")or die(mysqli_error($conn));
                    }else if($listing == "lama"){
                      $query_mysql = mysqli_query($conn, "SELECT * FROM tb_laundry ORDER BY id_laundry ASC")or die(mysqli_error($conn));
                    }
                  }
		            
		            $nomor = 1;
                if(mysqli_num_rows($query_mysql) > 0){

		                while($data = mysqli_fetch_array($query_mysql)){

		        ?>
    <!-- berfungsi untuk menginclude dengan menggunakan koneksi agar katalog sama dengan tampilan -->
              <div class="item col-md-4">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <?php
                      $usernameF = $data['username'];
                       $query_foto = mysqli_query($conn, "SELECT * FROM tb_foto_laundry INNER JOIN tb_laundry ON tb_laundry.id_foto_laundry = tb_foto_laundry.id_foto_laundry WHERE tb_laundry.username = '$usernameF' GROUP BY tb_foto_laundry.id_foto_laundry")or die(mysqli_error($conn));
                       
                       while($dat = mysqli_fetch_array($query_foto)){ ?>
                      <div class="front"><a href="/Rebellion/lapak.php?id=<?php echo $dat['username']?>"><img src="img/<?= $dat['foto'] ?>" alt="" class="img-fluid customImages"></a>
                      </div>
                      <div class="back"><a href="/Rebellion/lapak.php?id=<?php echo $dat['username']?>"><img src="img/<?= $dat['foto'] ?>" alt="" class="img-fluid customImages"></a>
                      </div>
                    <?php } ?>
                    </div>
                  </div><a href="/Rebellion/lapak.php?id=<?php echo $data['username']?>" class="invisible"><img src="img/laundry.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="/Rebellion/lapak.php?id=<?php echo $data['username']?>"><?= $data['nama_laundry']; ?></a></h3>
                    <p class="price"> 
                      <del></del> <?php echo $data['alamat'];?>
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>
              <?php } ?>

            <?php }else{ ?>
              <div>
                <h4 class="mr-auto font-weight-bolder">Laundry tidak ditemukan</h4>
              </div>
            <?php } ?>
              <!-- /.product-slider-->

            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
        
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
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/footer.php';?>

    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">©2019 Your name goes here.</p>
          </div>
          <div class="col-lg-6">
          </div>
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->

  </body>
</html>