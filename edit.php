<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Clean In Click</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/custom.css">

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

	 <!-- JavaScript files-->
	 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
	
	</head>
		<body style="background-color:rgb(175, 249, 252)">
    <header class="header mb-5">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
			
			<!-- Image and text -->
			<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand" href="#">
				<img src="images/admin.png" width="40" height="40" class="d-inline-block align-top" alt="">
				CLEAN IN CLICK
			</a>
			</nav>
			<div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
          </div>
        </div>
      </nav>
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
              </nav>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h1>EDIT DATA</h1>
                <hr>
				<?php 
				include "koneksi.php";
				$id = $_GET['id'];
				$query_mysql = mysqli_query($host,"SELECT * FROM registrasi_laundry WHERE username ='$id'")or die(mysql_error());
				$nomor = 1;
				while($data = mysqli_fetch_array($query_mysql)){
				?>
				<form action="update.php" method="post"enctype="multipart/form-data">	
                  <div class="form-group">
                  <input id="username" type="hidden"  class="form-control" name="username" value="<?php echo $data['username'] ?>">
                   <!-- <label for="username">Username</label>
                    
								<!-- <input type="text" name="nama" value="<?php echo $data['lapak'] ?> "> -->
                  </div>
                  <div class="form-group">
                    <label for="Nama_lapak">Nama Lapak</label>
                    <input type="text" class="form-control"  name="Nama_lapak" value="<?php echo $data['Nama_lapak'] ?>" >
                  </div>
                  <div class="form-group">
                    <label for="Alamat">Alamat Lapak</label>
                    <input type="text" class="form-control" name="Alamat" value="<?php echo $data['Alamat'] ?>">
                  </div>
                  <div class="form-group">
                  <label for="Kategori">Kategori</label>
                  <select name="Kategori" id="Kategori" class="form-control">
                  <option value="">- Pilih Kategori -</option>
                    <option value="antar jemput"> Antar Jemput </option>
                    <option value="tidak antar jemput"> Tidak Antar Jemput </option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="No_Tlp">Nomor Telepon</label>
                    <input id="No_Tlp" type="text" name="No_Tlp" class="form-control" value="<?php echo $data['No_Tlp'] ?>">
                  </div> 
				   <div class="form-group">
                    <label for="file">File input</label><br>
					<input type="file" name="file">	
                  </div>
				  <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" id="Email"  name="Email" class="form-control"value="<?php echo $data['Email'] ?>">	
                  </div>
                  <div class="form-group">
                    <label for="Password">Password</label>
                    <input id="Password" type="Password" class="form-control"  name="password" value="<?php echo $data['password'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="Deskripsi">Deskripsi</label>
					<textarea  type="text" class="form-control" id="Deskripsi" rows="3" name="deskripsi" value="<?php echo $data['deskripsi'] ?>"></textarea>
					</div>
                  <div class="text-center">
                  <input type="submit" class="btn btn-secondary btn-lg" value="Simpan">	
                  <input type="submit" class="btn btn-secondary btn-lg" value="Simpan">	
                  </div>
                </form>
              </div>
            </div>
	<div class="col-lg-6">
              <div class="box">
                <h1>LIHAT SEMUA DATA</h1>
                <a href="index.php">
                <!-- Lihat Semua Data</a> -->
                <button type="button" class="btn btn-outline-secondary">Lihat Semua Data</button>
            </div>
          </div>
          <?php } ?> 
        </div>
      </div>
  </div>
   <!-- JavaScript files-->
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
</body>
</html>
<a href="http://instagram.com/franciska.wdr">
                <img src="gambar/instagram.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <td><b>: Franciska.wdr</b></td>
                </a>