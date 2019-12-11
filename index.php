<!DOCTYPE html>
<html lang="en">

<head>
	<title>Clean in Click</title>
	<link rel="icon" href="images/10.png" type="images/10.png">
 
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php include "sidebar.php";?>

        <!-- Page Content Holder -->
        <div id="content" style="padding:0">
            <!-- top-bar -->
            <?php include "nav.php"?>
            <!--// top-bar -->
            <!-- main-heading -->
            <div class="alert alert-primary" role="alert" style="margin-top:-48px">
            <h4 class="tittle-w3-agileits mb-0 mt-0">Daftar Katalog </h4>
              
            </div>
            <!--// main-heading -->

            <!-- Pricing tables1 -->
            <section class="container">
            <div class="container">  
                <div class="card-deck text-center row">
                <!-- <script type="text/javascript">  -->
				<?php 
					//include merupan perintah untuk menyisipkanfile php ke dalam file php yang lainnya
                    include "koneksi.php";
                    if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        $query_mysql = mysqli_query($host,"SELECT * FROM tb_laundry where nama_laundry like '%$cari%'")or die(mysql_error());			
                    }else{
                        $query_mysql = mysqli_query($host,"SELECT * FROM tb_laundry")or die(mysql_error());
                    }
					//query mysql untuk menjalankan perintah pada mysql (untuk menampilkan data pada tabel user variabel)
					$nomor = 1;  

					//menggunakan while php
					while($data = mysqli_fetch_array($query_mysql)){// $data perintah untuk menampilkan data
                    //   print_r($data); 
						//berfungsi memecahkan data menjadi array dan memasukkan ke dalma variabel data dalam bentuk perulangan
					?>
                   
                  
                    <div class="col-md-4 box-shadow ">
                        <div class="card-header">
                            <h4 class="py-md-4 py-xl-3 py-2 text-white"><?php echo $data['nama_laundry']; ?></h4>
                        </div>
                        <div class="card-body">
							<div class="row">
								<div class="col col-md-6 d-block">
									<img src="file/<?=$data['_foto_laundry']?>" class="img-fluid" style="width:100%;" alt="">
								</div>
								<div class="col-md-6" style="overflow:hidden">
                                <p class="d-inline-block"><?= substr($data['deskripsi_laundry']."...", 0, 30)?></p>
                                <small class="text-muted"><?= $data['alamat'] ?></small>
								</div>
							</div>
                        </div>

					</div>
					<?php } ?>
                    </script> 
                    
                </div>
                </div>
            </section>
            <!-- Modal 
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="paragraph-agileits-w3layouts">!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Modal -->
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2019 Clean in Click  | email 
                    <a href="http://w3layouts.com/">  Cleaninclick@gmail.com </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>