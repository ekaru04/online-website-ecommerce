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
				
<body>
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post" enctype="multipart/form-data">
			
		<table>
		<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>				 	
			</tr>	
			<tr>
				<td>Nama_lapak</td>
				<td><input type="text" name="Nama_lapak"></td>				 	
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat"></td>					
			</tr>	
			<tr>
				<td>Kategori</td>
				<td><select name="Kategori" class="form-control form-control-sm">
				<option>Antar Jemput</option>
				<option>Tidak Antar Jemput</option>
				</select></td>					
			</tr>	<tr>
				<td>No Tlp</td>
				<td><input type="text" name="No_Tlp"></td>		<tr>
							
			</tr>	
				<td>Email</td>
				<td><input type="text" name="Email"></td>	
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi"></td>				 	
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>				 	
			</tr>	
				<td></td>		
				</tr>	<tr><td></td>
				<td><input type="file" name="foto"></td></tr>	<tr></tr>	<tr><td></td>
				<td><input type="submit" value="Simpan"> </td>					
			</tr>				
		</table>
	</form>
</body>
</html>