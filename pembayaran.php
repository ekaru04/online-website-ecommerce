<!DOCTYPE html>
<html lang="en">

<head>
	<title>Clean in Click</title>
	<link rel="icon" href="images/icon.jpg" type="images/icon.jpg">
    

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css." rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->
    <link rel="stylesheet" href="css/widgets.css">


    <style>
    .thead {
    background: #4fbfa8;
    }

    .thead th{
        color: white;
    }
        </style>
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
            <h4 class="tittle-w3-agileits mb-0 mt-0">TRANSAKSI</h4>
              
            </div>
            <!--// main-heading -->
            <section class="container">

                <div class="card-deck text-center row"> 
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".simpan-modal-sm"><i class="fa fa-save"></i>Simpan Gan</button> -->
                      <div class="modal fade simpan-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                          <?php //untuk membuat pesan bahwa data berhasil di inputkan
                            include "koneksi.php";
                            // if(isset($_GET['cari'])){
                            //     $cari = $_GET['cari'];
                            //     $query_mysql = mysqli_query($host,"SELECT * FROM tb_laundry where nama_laundry like '%$cari%'")or die(mysql_error());			
                            // }else{
                            //     $query_mysql = mysqli_query($host,"SELECT * FROM tb_laundry")or die(mysql_error());
                            // }
                            // $nomor =1;
                            // while($data = mysqli_fetch_array($query_mysql)){
                                
                            if(isset($_GET['pesan'])){
                                $pesan = $_GET['pesan']; 
                                if($pesan == "input"){
                                    echo "Data berhasil di input.";
                                }else if($pesan == "update"){
                                    echo "Data berhasil di update.";
                                }else if($pesan == "hapus"){
                                    echo "Data berhasil di hapus.";
                                }
                                
                            }
                            ?>
                          </div>
                        </div>
                      </div>

	<!--elemen tabel-->
    <div class="container">
	<table class="table table-responsive"> 
		<tr class="thead">
		<th>NO</th>
			<th>Username</th>
			<th>Paket</th>
			<th>Foto Bukti</th>
			<th>Status</th>
		</tr>
		<?php 
		include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/koneksi.php';
		$no = 1;
		$data = mysqli_query($host,"select *, tb_iklan.durasi_iklan as durasi from tb_trx JOIN tb_iklan ON tb_iklan.id_iklan = tb_trx.id_iklan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td> 
				<td><?php echo $d['id_iklan']; ?></td>
				<td><img src="file/<?php echo $d['foto_bukti']; ?>" style="width:80px" alt=""></td>
				<td>
					<?php if($d['status'] == "Belum_Terkonfirmasi"){?>
					<a class= "btn btn-danger btn-sm" href="konfirmasi_aksi.php?id=
					<?php echo $d['username']; ?>
					&durasi=<?php echo $d['durasi']; ?>
					&id_trx=<?php echo $d['id_trx']; ?>">KONFIRMASI</a>
					<?php }else{ echo "Telah Terkonfirmasi"; } ?>
				</td>
			</tr>
			<?php } ?>
	</table>
    <!-- <a class="tombol" href="input.php">+ Tambah Data Baru</a> -->
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
    <script>
$(window).load(function(){      
    <?php 
    if(isset($_GET['pesan'])){  
        ?>
        $('.modal').modal('show');
        
   <?php } ?>
    }); 

</script>
</body>
</html>