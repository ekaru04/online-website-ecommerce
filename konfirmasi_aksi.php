<?php

include 'koneksi.php';

$strBulan = null;
$username = $_GET['id'];
$durasi = $_GET['durasi'];
$id_trx = $_GET['id_trx'];

switch($durasi){
	case 30:
		$strBulan = "+ 1 months";
		break;
	case 90:
		$strBulan = "+ 3 months";
		break;
}

$p = mysqli_query($host, "SELECT tb_laundry.expired FROM tb_laundry WHERE username='$username'");
$tgl = mysqli_fetch_array($p);
$date = date("Ymd");
$day = strtotime($tgl['expired'].$strBulan);
$fDay =  date("Ymd", $day);

$u = mysqli_query($host, "UPDATE tb_laundry SET expired='$fDay' WHERE username='$username'");
// update expired sesuai iklan yang dipilih
$ra = mysqli_query($host, "UPDATE tb_trx SET status=2 WHERE username='$username' AND id_trx='$id_trx'");
// update status menjadi terkonfirmasi (2)

header("location:pembayaran.php");

?>