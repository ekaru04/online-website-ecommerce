<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';

session_start();
@$sess = $_SESSION['username'];

if($_SESSION['username'] == null){
  header("Location: index.php");
}

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

      <div id="berhasil" class="modal fade simpan-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="text-align:center">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            Berhasil Disimpan
                          </div>
                        </div>
                      </div>

      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <?php if($sess == null){

                ?>
                <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Masuk</a></li>
                <li class="list-inline-item"><a href="register.php">Daftar</a></li>
              <?php }else { ?>
                <li class="list-inline-item"><a href="#"><?php echo @$_SESSION['username']; ?></a></li>
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
                <form action="customer-orders.html" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="password" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                  </p>
                </form>
                <p class="text-center text-muted">Not registered yet?</p>
                <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <?php include "navbar.php"; ?>
    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Lapakku</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">
              <!--
              *** CUSTOMER MENU ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu">
                <div class="card-header">
                  <h3 class="h4 card-title"><?php echo $_SESSION['username'];?></h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column">
                    <a href="customer-account.php" class="nav-link active"><i class="fa fa-list"></i>Edit Lapak</a>
                    <a href="akun.php" class="nav-link"><i class="fa fa-user"></i>Tampilan Lapak</a>
                    <a href="pembayaran2.php" class="nav-link"><i class="fa fa-money"></i>Pembayaran</a></ul>
                </div>
              </div>
              <!-- /.col-lg-3-->
              <!-- *** CUSTOMER MENU END ***-->
            </div>
            <div id="customer-orders" class="col-lg-9">
              <div class="box">
                <h1>Lapakku</h1>
                <p class="lead">Detail lapak</p>
                <hr>
                <?php 
                  
                  $query_mysql = mysqli_query($conn,"SELECT * FROM tb_laundry WHERE username = '$sess'")or die(mysql_error());

                  $nomor = 1;
                  while($data = mysqli_fetch_array($query_mysql)){

                  ?>
                <form>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lapak </label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="nama" value="<?php echo $data['nama_laundry'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat Lapak</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="alamat" value="<?php echo $data['alamat'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      
                      <?php 
                      $idLaundry = $data['id_detail_kategori'];
                      $queryDetail = mysqli_query($conn, "SELECT * FROM tb_detail_kategori INNER JOIN tb_kategori ON tb_kategori.id_kategori = tb_detail_kategori.id_kategori WHERE id_laundry = '$idLaundry'");

                      while($uDetail = mysqli_fetch_array($queryDetail)){

                      ?>
                      <input type="text" readonly class="form-control-plaintext" id="kategori" value="<?php echo $uDetail['jenis_kategori']; ?>">
                    <?php } ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="telp" class="col-sm-2 col-form-label">No Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="no_telp" value="<?php echo $data['no_telp'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="email" value="<?php echo $data['email'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tgl" class="col-sm-2 col-form-label">Perpanjangan Iklan</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="tgl" value="<?php echo $data['expired']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="status" value="<?php echo $data['status'] ?>">
                    </div>
                  </div>
                  <td class="edit"><a href="customer-account-edit.php?id=<?php echo $data['id_laundry'] ?>" class="btn btn-warning btn-m">Edit</a></td>
                </form>
                <?php } ?>
                <!--<div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="thead">
                      <tr>
                        <th>Id</th>
                        <th>Nama Lapak</th>
                        <th>Alamat Lapak</th>
                        <th>Kategori</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Perpanjangan Iklan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>#1</th>
                        <td>Ucok Londre</td>
                        <td>Kaliurang</td>
                        <td>Antar Jemput</td>
                        <td><span class="badge badge-info">085155030010</span></td>
                        <td>uco @gmail.com</td>
                        <td>20-02-2020</td>
                        <td class="edit"><a href="customer-account-edit.html" class="btn btn-warning btn-sm">Edit</a> | <a href="" class="btn btn-danger btn-sm">Hapus</a></td>
                      </tr>
                      <tr>
                        <th>#2</th>
                        <td>Jamal Londre</td>
                        <td>Kaliurang</td>
                        <td>Antar Jemput</td>
                        <td><span class="badge badge-info">085155030010</span></td>
                        <td>jamal@gmail.com</td>
                        <td>20-02-2020</td>
                        <td class="edit"><a href="customer-account-edit.html" class="btn btn-warning btn-sm">Edit</a> | <a href="" class="btn btn-danger btn-sm">Hapus</a></td>
                      </tr>
                      <tr>
                        <th>#3</th>
                        <td>Usus Londre</td>
                        <td>Kaliurang</td>
                        <td>Antar Jemput</td>
                        <td><span class="badge badge-info">085155030010</span></td>
                        <td>usus@gmail.com</td>
                        <td>20-02-2020</td>
                        <td class="edit"><a href="customer-account-edit.html" class="btn btn-warning btn-sm">Edit</a> | <a href="" class="btn btn-danger btn-sm">Hapus</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Pages</h4>
            <ul class="list-unstyled">
              <li><a href="text.html">About us</a></li>
              <li><a href="text.html">Terms and conditions</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
            <hr>
            <h4 class="mb-3">User section</h4>
            <ul class="list-unstyled">
              <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
              <li><a href="register.html">Regiter</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Top categories</h4>
            <h5>Men</h5>
            <ul class="list-unstyled">
              <li><a href="category.html">T-shirts</a></li>
              <li><a href="category.html">Shirts</a></li>
              <li><a href="category.html">Accessories</a></li>
            </ul>
            <h5>Ladies</h5>
            <ul class="list-unstyled">
              <li><a href="category.html">T-shirts</a></li>
              <li><a href="category.html">Skirts</a></li>
              <li><a href="category.html">Pants</a></li>
              <li><a href="category.html">Accessories</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Where to find us</h4>
            <p><strong>Obaju Ltd.</strong><br>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br><strong>Great Britain</strong></p><a href="contact.html">Go to contact page</a>
            <hr class="d-block d-md-none">
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Get the news</h4>
            <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <form>
              <div class="input-group">
                <input type="text" class="form-control"><span class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary">Subscribe!</button></span>
              </div>
              <!-- /input-group-->
            </form>
            <hr>
            <h4 class="mb-3">Stay in touch</h4>
            <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#" class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="#" class="email external"><i class="fa fa-envelope"></i></a></p>
          </div>
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
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
            <p class="text-center text-lg-right">Template design by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial">Bootstrapious</a>
              <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks!-->
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <!--modal-->
    <script>
    $(document).ready(function(){
      var berhasil = <?php echo $_GET['pesan'] == "update" ? true : false ?>;
      if(berhasil == 1){
        $('#berhasil').modal('toggle');
        setTimeout(function() {
          $('#berhasil').modal('toggle');
        }, 2000);
      }
    });
    </script>
  </body>
</html>