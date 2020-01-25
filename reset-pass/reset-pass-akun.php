<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';

@session_start();
$sess = $_SESSION['username'];
$b = mysqli_fetch_array(mysqli_query($conn, "SELECT id_laundry, email from tb_laundry WHERE username = '$sess'"));
$id = $b['id_laundry'];
$email = $b['email'];

if($sess == null){
  header("location:index.php");
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
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm" disabled><?php echo date("Y-m-d");?></a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <li class="list-inline-item"><a href="customer-account.php"><?php echo @$_SESSION['username']; ?></a></li>
                <li class="list-inline-item"><a href="pembayaran2.php">Pembayaran</a></li>
                <li class="list-inline-item"><a href="keluar_aksi.php">Keluar</a></li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- *** TOP BAR END ***-->

      </div>
      <?php include "navbar.php"; ?>
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
      <!-- <div id="content"> -->
        <div class="container">
            <div class="col-lg-12">
              <!-- breadcrumb-->
            </div>
            <?php
$msg = @$_GET['msg'];
if($msg == "berhasil"){
  echo "<h4>password telah diganti</h4>";
}else if($msg == "sama"){
  echo "<h4>password tidak sama</h4>";
}else if($msg == "sama2"){
  echo "<h4>password tidak tedaftar</h4>";
}
?>
  <form action="change-pass-akun.php" method="post" enctype="multipart/form-data">
    <div class="box">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Reset Password Anda</h1>
            <hr>
              <input type="text" name="id_laundry" readonly hidden value="<?php echo $id; ?>">
              <input type="text" name="email" readonly hidden value="<?php echo $email; ?>">
            <div class="form-group">
				      <label><strong>Password Lama</strong></label>
              <input class="form-control" type="Password" name="oldPass" placeholder="Password Lama">
		        </div>	
		        <div class="form-group">
		        	<label><strong>Password Baru</strong></label>
		        	<input class="form-control" type="Password" name="newPass" placeholder="Password Baru">		 	
		        </div>	
		        <div class="form-group">	
		        	<label><strong>Ulangi Password Baru</strong></label>
              <input class="form-control" type="Password" name="rePass" placeholder="Ulangi Password Baru">	
		        </div>
      <div class="modal-footer">
        <button type="submit" name="reset" class="btn btn-primary">simpan</button>
      </div>
        </div>
      </div>
      </div>
  </form>
</div>
</div>
    <br>

    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <?php include "footer.php"; ?>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
  </body>
</html>