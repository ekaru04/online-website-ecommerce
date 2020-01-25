<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';
date_default_timezone_set('Asia/Jakarta');

?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <style>
	.garis_verikal{
		border-left: 1px black solid;
		height: 170px;
		width: 0px;
	}
	</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clean in Click</title>
  	<link rel="icon" href="images/icon.jpg" type="images/icon.jpg">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
  </head>
  <body>
  <?php
$msg = @$_GET['pesan'];
if($msg == "sukses"){
  echo "<h4>Email telah terkirim</h4>";
}else if($msg == "gagal"){
  echo "<h4>Email tidak terdaftar</h4>";
} 
?>
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
                <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Masuk</a></li>
                <li class="list-inline-item"><a href="register.php">Daftar</a></li>
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
                    <input id="email-modal" type="text" name="username" placeholder="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" name="password" placeholder="password" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
      </div>
      
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    
    <div id="all"> 
        <div class="container">
            <div class="col-lg-12">
              <!-- breadcrumb-->
            </div>
      <form action="resetpass.php" method="post" enctype="multipart/form-data">
        <div class="box">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center">Reset Kata Sandi Anda</h1>
            <hr>
            <!-- <div class="row">
                      <div class="col-md-6 col-lg-3"> -->
            <br>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Masukan Email</label>
                          <input class="form-control" type="text" name="email" placeholder="email">
                    </div>  
                  </div>
                <div class="col-md-6">
                  <div class="garis_verikal"></div>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Verifikasi</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

    <!-- *** COPYRIGHT ** -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/footer.php';?>

    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
    </script>
  </body>
</html>