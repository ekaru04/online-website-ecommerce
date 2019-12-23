<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/koneksi.php';

$username = $_GET['id'];
$status = $_GET['status'];
$query;

switch($status){
	// meng aktifkan dan menonaktifkan lapak yang terdaftar di database dari sisi admin
	case "aktifkan":
		$query = "UPDATE tb_laundry SET status='Aktif' WHERE username='$username'";
		break;
	case "nonaktifkan":
		$query = "UPDATE tb_laundry SET status='Tidak_aktif' WHERE username='$username'";
		break;
}

mysqli_query($host, $query);

header("location:user.php");

?>