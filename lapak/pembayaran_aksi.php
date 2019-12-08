<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';

date_default_timezone_set('Asia/Jakarta');
session_start();

if($_POST['submit']){
$username = $_SESSION['username'];
$paket = $_POST['paket'];
$foto = $_FILES['foto']['name'];
$x = explode('.', $foto);
$eks = array('png', 'jpg');
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['foto']['size'];
$date = date("Ymd");

	if(in_array($ekstensi, $eks) === true){
		if($ukuran < 5000000){
			move_uploaded_file($_FILES['foto']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/Rebellion/bukti/".$foto);
			$a = "INSERT INTO tb_trx VALUES ('','$username', '$paket', '$foto', 'Belum_Terkonfirmasi', '$date')";
			$z = mysqli_query($conn, $a);
			if($z){
				echo 'Berhasil di upload';
			}else{
				echo 'Gagal di upload';
			}
		}else{
			echo 'File gede';
		}
	}else{
		echo 'Format salah';
	}


}


header("Location:../lapak/pembayaran2.php?pesan=berhasil");

?>