<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';
date_default_timezone_set('Asia/Jakarta');
$w= mysqli_query($conn, "SELECT * FROM tb_kategori");

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
    <script src="js/ckeditor/ckeditor.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/sweetalert.min.js"></script>
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
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm"><?php echo date("Y-m-d"); ?></a></div>
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
      <?php include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/navbar.php';?>
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
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">New account / Sign in</li>
                </ol>
              </nav>
            </div>
            <form action="register-aksi.php" method="post" enctype="multipart/form-data">
            <div class="box">
            <div class="row">
            <div class="col-md-12">
            <h1 class="text-center">DAFTAR</h1>
                <p class="text-center">Anda dapat mempromosikan Laundry anda disini selama 30 Hari kedepan. Selamat mendaftar ^^</p>
                <p class="text-muted text-center">Jika kamu memiliki pertanyaan, silahkan hubungi kontak yang tertera dibawah</p>
            </div>
            <div class="col-md-6">
                
                <hr>
                <!-- <?php
                // if(isset($_POST['Daftar'])){
                //   $username = $_POST['username'];
                //   $nama_laundry = $_POST['nama_laundry'];
                //   $alamat = $_POST['alamat'];
                //   $password = $_POST['password'];
                //   $email = $_POST['email'];
                //   $deskripsi_laundry = $_POST['deskripsi_laundry'];
                //   $kategori = $_POST['kategori'];                
                  
                //   if(empty($username) || empty($nama_laundry) || empty($alamat) || empty($password) || empty($email) || empty($deskripsi_laundry) || empty($kategori)) {
                //     echo "<strong> Data Harus Diisi!</strong>";
                //   }else{
                //     //proses
                //   }
                // }
                ?> -->
                <div class="form-group">
                <!-- penggunaan required autofocus untuk memvalidasi jika terdapat kolom register yang belum terisi. -->
                    <label for="username">Username</label>
                    <input name="username" type="teks" class="form-control" placeholder="Isi Username Anda" maxlength="10" required autofocus="">
                  </div>
                  <div class="form-group">
                    <label for="nama_laundry">Nama Laundry</label>
                    <input name="nama_laundry" type="text" class="form-control" placeholder="Isi Nama Laundry Anda" maxlength="50" required autofocus="">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat Lapak</label>
                    <input name="alamat" type="text" class="form-control" maxlength="100" placeholder="Isi Alamat Lapak Anda" required autofocus="">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="Password" class="form-control" placeholder="Isi Password Akun Anda" maxlength="10" required autofocus="">
                    <p>isi password anda 10 digit </p>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="text" class="form-control" maxlength="50" placeholder="Isi Email Anda" required autofocus="">
                  </div>
                  <div class="form-group">
                    <label for="no_telp">Nomor Whatsapp</label>
                    <script>
                      function angka(evt){
                        var charCode = (evt.which)? evt.which : event.keyCode
                        if (charCode > 31 && (charCode < 48 || charCode > 57))
                        return false;
                        return true;
                      }
                    </script>
                    <input name="no_telp" type="text" onkeypress="return angka(event)" class="form-control" maxlength="12" placeholder="Isi Nomor Whatsapp Anda yang Aktif" required autofocus="" id="noTelpChange">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi_laundry">Deskripsi</label>
                    <textarea class="ckeditor" name="deskripsi_laundry" id="ckeditor" required autofocus=""></textarea>
                  </div>
                  <div class="form-group">
                  <label for="kategori">Kategori (Pilih Kategori yang Sesuai Dengan Lapak Anda)</label><br>
                  <!-- <select name="kategori" id="kategori" class="form-control">
                  <option value="">- Pilih Kategori -</option> -->
                  <?php
                  // menampilkan field kategori yg terdapat dalam database
                  while ($r = mysqli_fetch_assoc($w)){
                    echo "<input type='checkbox' value=".$r['id_kategori']." name='id_detail_kategori[]'> ".$r ['jenis_kategori']." <br/>";
                  }
                  ?>
                  </div>
                  
              </div>
            
            <div class="col-md-6" >
                  <p>Upload foto Laundry : <br> <b>Klik Foto</b> untuk Menghapus foto yang sudah di upload</p>
                  <label for="foto">Upload Foto</label>
                  <input type="file" multiple name="foto[]" id="file">   
                  <div class="gallery"></div>
                  <div class="text-center">
                    <input  type="submit" name="daftar" value="Daftar" class="btn btn-primary">
                  </div>
            </div>
            </div>
          </form>
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

    <script>
    
    String.prototype.replaceAt=function(index, char) {
    var a = this.split("");
    a[index] = char;
    return a.join("");
    }

    $('#noTelpChange').on('change', function(){
      if(this.value[0] === '0'){
        this.value = this.value.replaceAt(0, "+62");
      }else{
        swal("Nomor telpon tidak valid!");
        this.value = "";
      }
    }); 

    $(function(){
      var imagesPreview = function(input, placeToInsertImagePreview) {
    if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(event) {
                $($.parseHTML('<img style=width:190px class="delete">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                // peletakan foto
                $(".delete").click(function(){
                  $(this).remove();
                  // jika foto diklik, maka foto akan terhapus dari halaman
                });
            }
            reader.readAsDataURL(input.files[i]);
        }
    }
    };
    // melakukan upload foto 
    
    $('#file').on('change', function() {
    imagesPreview(this, 'div.gallery');
    });
    })
    var currentFile = null;
    Dropzone.autoDiscover = false;
    var formData = new FormData();
    var myDropzone = new Dropzone(".dropzone", {
  addRemoveLinks: true,
  url: "register-aksi.php",
  maxFiles:5,
  init: function() {
    this.on("addedfile", function(file) {
        formData.append("file", file); 
    });
    this.on("removedfile", function(file) { 
      formData.delete('file');
    });
  }   
});
    // menampilkan foto pada saat upload foto di dalam halaman register menggunakan dropzone
    </script>
  </body>
</html>