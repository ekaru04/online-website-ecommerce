<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';
date_default_timezone_set('Asia/Jakarta');
session_start();

@$sess = $_SESSION['username'];

$o = mysqli_query($conn, "SELECT * FROM tb_iklan");


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CleanInKlik</title>
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
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm"><?php echo date("Y-m-d")?></a><a href="#" class="ml-1">Get flat 35% off on orders over $50!</a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <?php if(@$sess == null){ ?>

                <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Masuk</a></li>
                <li class="list-inline-item"><a href="register.php">Daftar  </a></li>
              <?php }else{ ?>
                <li class="list-inline-item"><a href="akun.php"><?php echo @$_SESSION['username']; ?></a></li>
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
                    <input id="email-modal" type="text" placeholder="email" name="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="password" name="password" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary" type="submit" name="login"><i class="fa fa-sign-in"></i> Log in</button>
                  </p>
                </form>


        <?php   

          if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $q = mysqli_query($conn, "SELECT * FROM tb_laundry where username='$username' and password='$password'");
            $cek = mysqli_num_rows($q);
            if($cek > 0){
              $data = mysqli_fetch_assoc($q);
              $_SESSION['username'] = $username;
              header("location:index.php");
            }else{
              echo "gagal login";
            }
          } 

          ?> 
          <!-- mengambil data dari dtabase untuk login  -->
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <?php include "navbar.php" ?>
    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Laundry</a></li>
                  <!-- <li class="breadcrumb-item"><a href="#">Tops</a></li> -->
                </ol>
              </nav>
            </div>
            <div class="col-lg-3 order-2 order-lg-1">
              <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
              <?php

                $query_mysql = mysqli_query($conn,"SELECT * FROM tb_laundry tl INNER JOIN tb_kategori tk ON tl.id_detail_kategori=tk.id_kategori where tl.username='$_GET[id]'");
		            $data = mysqli_fetch_array($query_mysql);

		          ?>
                <div class="card-header">
                
                  <h3 class="h4 card-title">Kategori</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column category-menu">
                    <li><a class="nav-link">Pengiriman<span class="badge badge-secondary"></span></a>
                      <ul class="list-unstyled">
                        <li><a class="nav-link"><?php echo $data["jenis_kategori"]?></a></li>
                      </ul>
                    </li>
                    
                  </ul>
                </div>
              </div>
              <!-- *** MENUS AND FILTERS END ***-->
              <div class="banner"><a href="#"><img src="img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
              <div id="productMain" class="row">
                <div class="col-md-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                  <?php 
                  $dt = mysqli_query($conn, "SELECT * FROM  tb_foto_laundry order by id_foto_laundry desc");
                  while($d = mysqli_fetch_array($dt)){
                    // echo "<pre>";
                    // print_r($d['foto']);
                  ?>
                    <div class="item"> <img src="uploaded/<?= $d['foto']; ?>" alt="" class="img-fluid"></div>
                    <?php } ?>
                  </div>
                 
                </div>
                <div class="col-md-6">
                  <div class="box">
                  <?php

                $query_mysql = mysqli_query($conn,"SELECT * FROM tb_laundry WHERE username='$_GET[id]'");
		            $nomor = 1;
		            $data = mysqli_fetch_array($query_mysql)
		?>
                    <h1 class="text-center"><?php echo $data["nama_laundry"]?></h1>
                    <h5 style="text-align:justify;"><?php echo $data["alamat"]?></h5>
                    <h5 style="text-align:justify;"><?php echo $data["email"]?></h5>
                    <!-- <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material &amp; care and sizing</a></p> -->
                    <!-- <p class="price"></p> -->
                    <p class="text-center buttons"><a href="https://web.whatsapp.com/send?phone=<?php echo $data['no_telp'];?>&text=Test%20doang%20sis" class="btn btn-primary"><i class="fa fa-shopping-cart"></i><?php echo $data['no_telp']?></a>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs">
                  
                  </div>
                </div>
              </div>
              <div id="details" class="box">
                <p></p>
                <h4>Deskripsi Lapak </h4>
                <p style="text-indent:0.4in;"><?php echo $data["deskripsi_laundry"]?></p>
                <blockquote>
                  <p><em>Jika ingin menggunakan jasa kami langsung hubungi kami. Dengan senang hati kami membantu pekerjaan anda yang tertunda.</em></p>
                </blockquote>
                <hr>
                <div class="social">
                  <h4>Show it to your friends</h4>
                  <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
                </div>
              </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-9-->
          </div>
        </div>
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

  </body>
</html>