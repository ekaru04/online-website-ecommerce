<!DOCTYPE html>
<html>
<head>
	<title>Clean in Click</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="custom.css">
  <link rel="stylesheet" type="text/css" href="animate.css">
  <script src="jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
  </script>
  <script src="bootstrap.min.js"></script>
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
        <a class="nav-link" href="lapak/daftar.php">Daftar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      
      <button type="button" class="btn btn-info">Keluar</button>
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

      <?php for($r = 0; $r < 10; $r++){?>

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
  				      				<p class="card-text">Saya ganteng</p>
  				      				<a href="#" class="btn btn-primary">Baca lebih lanjut</a>
  				    			</div>
  				  			</div>
  						</div> <!-- penutup col-sm -->
					</div> <!-- penutup row no-gutters -->
				</div> <!-- penutup card mb-3 -->
			</div> <!-- penutup col-lg-6 -->
			
      <?php } ?>

       <!-- penutup card mb-3 -->
			
		</div><!-- penutup row -->
	</div> <!-- penutup Jumbotron -->
</div> <!-- penutup container -->


</section>
</body>
</html>