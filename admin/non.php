<?php

include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');

$strBulan = null;
$username = $_GET['id'];
$status = $_GET['status'];
$quertExp;	
$query;

switch($status){
	case "aktifkan":
		$query = "UPDATE tb_laundry SET status='Aktif' WHERE username='$username'";
		mysqli_query($host, $query);
		$extend = date("Y-m-d");
		$date = "UPDATE tb_laundry SET expired = date_add('$extend', INTERVAL 30 DAY) where username = '$username'";

		$a = mysqli_query($host, $date)or die(mysqli_error($host));
		break;
	case "nonaktifkan":
		$query = "UPDATE tb_laundry SET status='Tidak_aktif' WHERE username='$username'";
		mysqli_query($host, $query);
		break;
}

$p = mysqli_query($host, "SELECT tb_laundry.expired FROM tb_laundry WHERE username='$username'");

$tgl = mysqli_fetch_array($p);
$day = strtotime($tgl['expired'].$strBulan);

header("location:user.php");

?>