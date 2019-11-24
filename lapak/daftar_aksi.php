<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';

$getInt = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_foto_laundry) FROM tb_foto_laundry"))[0];

$date = date("Ymd");
$day30 = strtotime($date."+ 1 months");
$fDay =  date("Ymd", $day30);

$username = $_POST['username'];
$nama_laundry = $_POST['nama'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$email = $_POST['email'];
$deskrip = $_POST['deskripsi'];
$kategori = $_POST['kategori'];

$indexFoto = 0;



foreach($_FILES['foto']['name'] as $p){
	$sql1 = "INSERT INTO tb_foto_laundry VALUES('$getInt','$p')";
	move_uploaded_file($_FILES['foto']['tmp_name'][$indexFoto], $_SERVER['DOCUMENT_ROOT']."/Rebellion/foto/".$p);
	mysqli_query($conn, $sql1);
	$indexFoto++;
}

$a = "INSERT INTO tb_laundry VALUES ('$username', '$nama_laundry', '$alamat', '$password', '$email', '$deskrip', '$kategori', '$getInt', '$fDay')";
$z = mysqli_query($conn, $a);

header("location:../login.php");
	
?>