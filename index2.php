<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/koneksi.php';
date_default_timezone_set('Asia/Jakarta');
session_start();
$username = $_SESSION['username'];

$sql = "SELECT expired FROM tb_laundry WHERE username = '$username'";
$result = mysqli_query($koneksi, $sql);

$info = mysqli_fetch_assoc($result);
$dueExpire = round((strtotime($info['expired']) - time()) / 86400);
// time() = waktu sekarang
// 86400 = 60 detik * 60 menit * 24 jam
// round = pembulatan


    if(strtotime(date("Y-m-d")) < strtotime($info['expired'])){
        if($dueExpire <= 7 ){
          echo "<h6>Dalam $dueExpire hari lapak otomatis terhapus, silahkan lakukan perpanjangan</h6>";  
        }
    }
    else{
      ?>
        <div class="alert alert-danger">Expired</div>
      <?php
    }
          echo "<h6>".date("d-m-y")."</h6>";

      ?>



<!DOCTYPE html>
<html>
<head>
	<title>Clean in Click</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <script src="js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
  </script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- Navbar Section -->
<section>	
	<nav class="navbar navbar-expand-lg color">
  		<a class="navbar-brand brand" href="#">CLEAN IN CLICK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
              <li class="nav-item active"></li>
              <li class="nav-item">
                 <a class="nav-link" href="#">Kategori</a>
                 </li>
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Antar jemput</a>
                    <a class="dropdown-item" href="#">Tidak Antar Jemput</a>
                  <div class="dropdown-divider">
              </div>
        </div>
        </a>
      </li>
      <li>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </form>
      </li>
    </ul>
    <ul class="navbar-nav my-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">Pengaturan</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="lapak/detail.php">Akun</a>
          <a class="dropdown-item" href="keluar_aksi.php">keluar</a>
          <div class="dropdown-divider"></div>
        </div>
        </a>
      </li>
      <!-- <button type="button" class="btn btn-info">Keluar</button> -->
      <a href="../Rebellion/lapak/pembayaran2.php">Bayar</a>
    </ul>
  </div>
</nav>
</section>
<!-- Category Section -->
<section>
<div class="jumbotron"></div>
</section>
<!-- Lapak Section -->
<section>
<div class="container">
	<div class="">
		<div class="row">
			<div class="col-lg-6">
				<div class="card mb-3" style="max-width: 540px;">
  					<div class="row no-gutters">
    					<div class="col-md-4">
      						<img src="https://lh3.googleusercontent.com/p0kDFqAdPATi3OIs1BoigNZGnJ6Fa20GSpmqhdRASHVgXYIp-pCrgzn0cgijwze2Rzf-4TRW=s1280-p-no-v1" class="card-img" alt="...">
    					</div>
  						<div class="col-sm">
  				  			<div class="card">
  				    			<div class="card-body">
  				      				<h5 class="card-title">Laundry Jember</h5>
  				      				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  				      				<a href="#" class="btn btn-primary">Baca lebih lanjut</a>
  				    			</div>
  				  			</div>
  						</div> <!-- penutup col-sm -->
					</div> <!-- penutup row no-gutters -->
				</div> <!-- penutup card mb-3 -->
			</div> <!-- penutup col-lg-6 -->
			<div class="col-lg-6">
				<div class="card mb-3" style="max-width: 540px;">
  					<div class="row no-gutters">
    					<div class="col-md-4">
      						<img src="https://lh3.googleusercontent.com/p0kDFqAdPATi3OIs1BoigNZGnJ6Fa20GSpmqhdRASHVgXYIp-pCrgzn0cgijwze2Rzf-4TRW=s1280-p-no-v1" class="card-img" alt="...">
    					</div>
  						<div class="col-sm">
  				  			<div class="card">
  				    			<div class="card-body">
  				      				<h5 class="card-title">Special title treatment</h5>
  				      				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  				      				<a href="#" class="btn btn-primary">Go somewhere</a>
  				    			</div>
  				  			</div>
  						</div>
					</div> <!-- penutup row no-gutters -->
				</div> <!-- penutup card mb-3 -->
			</div> <!-- penutup col-lg-6 -->
			<div class="col-lg-6">
				<div class="card mb-3" style="max-width: 540px;">
  					<div class="row no-gutters">
    					<div class="col-md-4">
      						<img src="https://lh3.googleusercontent.com/p0kDFqAdPATi3OIs1BoigNZGnJ6Fa20GSpmqhdRASHVgXYIp-pCrgzn0cgijwze2Rzf-4TRW=s1280-p-no-v1" class="card-img" alt="...">
    					</div>
  						<div class="col-sm">
  				  			<div class="card">
  				    			<div class="card-body">
  				      				<h5 class="card-title">Special title treatment</h5>
  				      				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  				      				<a href="#" class="btn btn-primary">Go somewhere</a>
  				    			</div>
  				  			</div>
  						</div>
					</div> <!-- penutup row no-gutters -->
				</div> <!-- penutup card mb-3 -->
			</div> <!-- penutup col-lg-6 -->
			<div class="col-lg-6">
				<div class="card mb-3" style="max-width: 540px;">
  					<div class="row no-gutters">
    					<div class="col-md-4">
      						<img src="https://lh3.googleusercontent.com/p0kDFqAdPATi3OIs1BoigNZGnJ6Fa20GSpmqhdRASHVgXYIp-pCrgzn0cgijwze2Rzf-4TRW=s1280-p-no-v1" class="card-img" alt="...">
    					</div>
  						<div class="col-sm">
  				  			<div class="card">
  				    			<div class="card-body">
  				      				<h5 class="card-title">Special title treatment</h5>
  				      				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  				      				<a href="#" class="btn btn-primary">Go somewhere</a>
  				    			</div>
  				  			</div>
  						</div>
					</div> <!-- penutup row no-gutters -->
				</div> <!-- penutup card mb-3 -->
			</div> <!-- penutup col-lg-6 -->
			<div class="col-lg-6">
				<div class="card mb-3" style="max-width: 540px;">
  					<div class="row no-gutters">
    					<div class="col-md-4">
      						<img src="https://lh3.googleusercontent.com/p0kDFqAdPATi3OIs1BoigNZGnJ6Fa20GSpmqhdRASHVgXYIp-pCrgzn0cgijwze2Rzf-4TRW=s1280-p-no-v1" class="card-img" alt="...">
    					</div>
  						<div class="col-sm">
  				  			<div class="card">
  				    			<div class="card-body">
  				      				<h5 class="card-title">Special title treatment</h5>
  				      				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  				      				<a href="#" class="btn btn-primary">Go somewhere</a>
  				    			</div>
  				  			</div>
  						</div>
					</div> <!-- penutup row no-gutters -->
				</div> <!-- penutup card mb-3 -->
			</div> <!-- penutup col-lg-6 -->
			<div class="col-lg-6">
				<div class="card mb-3" style="max-width: 540px;">
  					<div class="row no-gutters">
    					<div class="col-md-4">
      						<img src="https://lh3.googleusercontent.com/p0kDFqAdPATi3OIs1BoigNZGnJ6Fa20GSpmqhdRASHVgXYIp-pCrgzn0cgijwze2Rzf-4TRW=s1280-p-no-v1" class="card-img" alt="...">
    					</div>
  						<div class="col-sm">
  				  			<div class="card">
  				    			<div class="card-body">
  				      				<h5 class="card-title">Special title treatment</h5>
  				      				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  				      				<a href="#" class="btn btn-primary">Go somewhere</a>
  				    			</div>
  				  			</div>
  						</div>
					</div> <!-- penutup row no-gutters -->
				</div> <!-- penutup card mb-3 -->
			</div> <!-- penutup col-lg-6 -->
			<div class="col-lg-6">
				<div class="card mb-3" style="max-width: 540px;">
  					<div class="row no-gutters">
    					<div class="col-md-4">
      						<img src="https://lh3.googleusercontent.com/p0kDFqAdPATi3OIs1BoigNZGnJ6Fa20GSpmqhdRASHVgXYIp-pCrgzn0cgijwze2Rzf-4TRW=s1280-p-no-v1" class="card-img" alt="...">
    					</div>
  						<div class="col-sm">
  				  			<div class="card">
  				    			<div class="card-body">
  				      				<h5 class="card-title">Special title treatment</h5>
  				      				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  				      				<a href="#" class="btn btn-primary">Go somewhere</a>
  				    			</div>
  				  			</div>
  						</div>
					</div> <!-- penutup row no-gutters -->
				</div> <!-- penutup card mb-3 -->
			</div> <!-- penutup col-lg-6 --><div class="col-lg-6">
				<div class="card mb-3" style="max-width: 540px;">
  					<div class="row no-gutters">
    					<div class="col-md-4">
      						<img src="https://lh3.googleusercontent.com/p0kDFqAdPATi3OIs1BoigNZGnJ6Fa20GSpmqhdRASHVgXYIp-pCrgzn0cgijwze2Rzf-4TRW=s1280-p-no-v1" class="card-img" alt="...">
    					</div>
  						<div class="col-sm">
  				  			<div class="card">
  				    			<div class="card-body">
  				      				<h5 class="card-title">Special title treatment</h5>
  				      				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  				      				<a href="#" class="btn btn-primary">Go somewhere</a>
  				    			</div>
  				  			</div>
  						</div>
					</div> <!-- penutup row no-gutters -->
				</div> <!-- penutup card mb-3 -->
			</div> <!-- penutup col-lg-6 -->
		</div><!-- penutup row -->
	</div> <!-- penutup Jumbotron -->
</div> <!-- penutup container -->


</section>
</body>
</html>