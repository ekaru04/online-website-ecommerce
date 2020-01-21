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
    <title>Obaju : e-commerce template</title>
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
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="../index2.php" class="btn btn-success btn-sm"><?php echo date("Y-m-d")?></a><a href="#" class="ml-1"></a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <?php if(@$sess == null){

                ?>
                <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                <li class="list-inline-item"><a href="register.php">Daftar</a></li>
                <?php }else{ ?>
                <li class="list-inline-item"><a href="index.php"><?php echo @$_SESSION['username']; ?></a></li>
                <?php } ?>
                <li class="list-inline-item"><a href="keluar_aksi.php">Keluar</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><?php echo @$sess;?></h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="cek_login.php" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="username" class="form-control" name="username">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="password" class="form-control" name="password">
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
      <div id="content">
        <div class="container container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Pembayaran</li>
                </ol>

                <?php 
                  if(isset($_GET['pesan'])){
                    $pesan = $_GET['pesan'];
                  if($pesan == "berhasil"){
                ?>

                <div class="alert alert-success">Bukti telah terkirim, silahkan tunggu konfirmasi</div>  

                <?php 
                  }else{
                ?>

                <div class="alert alert-danger">Gagal</div>

                <?php }  } ?>
                
              </nav>
            </div>
            <div id="basket" class="col-lg">
              <div class="box">
                <form method="post" action="pembayaran_aksi.php" enctype="multipart/form-data">
                  <h1>Pembayaran</h1>
                  <p class="text-muted">Transfer ke rekening yang tertera.</p>
                  <h3>BCA - 0000000000000 a/n Franciska</h3>
                  <div class="table-responsive">
            Paket Iklan: 
            <select class="form-control" name="paket">
                <option class="text-justify" >---- Pilih Paket ----</option>
                <?php
                    while($r = mysqli_fetch_assoc($o)){
                    echo "<option value=".$r['id_iklan'].">".$r['durasi_iklan']."hari -".$r['harga_iklan']."</option>";
                    }
            
                ?>
            </select>
            <br>
            <div class="pt-3" style="border: 1px solid black; height: 200px; margin: auto; text-align: center;">
                <p style="margin-top: 10%"><input type="file" name="foto" hidden id="uploadFoto"></input> <label for="tombolUpload" id="labelUpload"></label><button id="tombolUpload">Upload Foto</button></p>
            </div>
                  </div>
                  <!-- /.table-responsive-->
                  <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                    <div class="left"></div>
                    <div class="right">
                      <!-- <button class="btn btn-outline-secondary"><i class="fa fa-refresh"></i> Update cart</button> -->
                      <button type="submit" name="submit" value="submit" class="btn btn-primary">Kirim Bukti Pembayaran <i class="fa fa-send"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.box-->
            <!-- /.col-lg-9-->
              </div>
              <!-- <div class="box">
                <div class="box-header">
                  <h4 class="mb-0">Via Pembayaran</h4>
                </div>
                <p class="text-muted">Lakukan transfer ke Rekening yang tertera.</p>
                <h2>Rek. BCA</h2>
                <h4>0000000000000 a/n Franciska</h4>
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control"><span class="input-group-append">
                      <button type="button" class="btn btn-primary"><i class="fa fa-gift"></i></button></span>
                  </div>
                  
                </form>
              </div> -->
            </div>
            <!-- /.col-md-3-->
          </div>
        </div>
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <?php include "footer.php"; ?>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
  </body>

<script>
$('#tombolUpload').click(function(event){
    event.preventDefault();
    $('#uploadFoto').click();
});

$('#uploadFoto').change(function(){
    $('#labelUpload').html("1 Foto Telah Diupload");
});
</script>


</html>