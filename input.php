<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- menampilkan judul dari website -->
    <title>Clean In Click</title>
  <link rel="icon" href="images/icon.jpg" type="images/icon.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
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
    <header class="header mb">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
            <!-- <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Offer of the day</a><a href="#" class="ml-1">Get flat 35% off on orders over $50!</a></div> -->
            <div class="col-lg-12 text-center text-lg-right">
				<!-- Image and text -->
				<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand" href="#">
				<img src="images/admin.png" width="40" height="40" class="d-inline-block align-top" alt="">
				<font face="Serif" font-style= "oblique" color='#555'>CLEAN IN CLICK</font>
			</a>
			</nav>
			<div class="navbar-buttons d-flex justify-content-end">
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
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
                    
                  </p>
                </form>
               </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
            <div class="navbar-buttons d-flex justify-content-end">
        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Cari apa gan" class="form-control">
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
        <div class="container pt-3">
          <div class="row">
            <div class="col-lg-3">
              <!--
              *** CUSTOMER MENU ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu">
                <div class="card-header pb-4" style="background: #4fbfa8; color: #fff;">
                  <h3 class="nav nav-pills flex-column"  >PANEL ADMIN</h3>
                </div>
                <div class="card-body">
                  <!-- <ul class="nav nav-pills flex-column"> -->
                  <a href="index.php" class="nav-link active"><i class="fa fa-list">
                  </i> KATALOG</a>
                  <a href="user.php" class="nav-link">
                  <i class="fa fa-user"></i> DATA KONSUMEN </a>
                </div>
              </div>
              <!-- *** CUSTOMER MENU END ***-->
            </div>
            <div class="col-lg-9">
              <div class="box">
                <h1>Tambah Data </h1>
	
	<form action="input-aksi.php" method="post" enctype="multipart/form-data">
			
		<table>
		<tr>
		<div class="form-group">
    <!-- form input lapak dari sisi admin -->
				<label>Username</label>
				<input type="text" class="form-control" name="username">		 	
		</div>	
		<div class="form-group">
				<label>Nama lapak</label>
				<input type="text" class="form-control" name="nama_laundry">			 	
		</div>	
		<div class="form-group">	
				<label>Alamat</label>
				<input type="text" class="form-control" name="alamat">				
		</div>
		<div class="form-group">
                  <label for="Kategori">Kategori</label>
                  <select name=id_kategori" id="Kategori" class="form-control">
                  <option value="">- Pilih Kategori -</option>
                    <option value="antar jemput"> Antar Jemput </option>
                    <option value="tidak antar jemput"> Tidak Antar Jemput </option>
                  </select>
                  </div>

		<div class="form-group">	
				<label>Telepon</label>
				<input type="text" class="form-control" name="no_tlp">
		</div>
		<div class="form-group">	
				<label>Email</label>
				<input type="text" class="form-control" name="email">					
			</div>

      <div class="form-group">	
				<label>Pilih File</label>	
        <br>
       <input type="file" name="id_foto_laundry">
			</div>

			<div class="form-group">	
				<label>Deskripsi</label>
				<textarea type="text" class="form-control" name="deskripsi_laundry">	</textarea>				
			</div>
		<div class="form-group">	
				<label>Password</label>
				<input type="password" class="form-control" name="password">					
		</div>	
	<td></td>		
				</tr>	<tr><td></td>
			
				<td><input type="submit" value="Simpan" class="btn btn-outline-secondary">
  <button type="reset" value="Reset"class="btn btn-outline-secondary">Reset</button>
</form>	
       	
			</tr>				
		</table>
	</form> 
              </div>
            </div>
            </div>
          </div> -->
          
        </div>
      </div>
  </div>
</body>
</html>