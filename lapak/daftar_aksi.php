<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';

$getInt = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_foto_laundry) FROM tb_foto_laundry"))[0];

$b = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_laundry) FROM tb_laundry"))[0];
$b++;

$date = date("Ymd");
$day30 = strtotime($date."+ 1 months");
$fDay =  date("Ymd", $day30);

$username = $_POST['username'];
$nama_laundry = $_POST['nama'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$email = $_POST['email'];
$deskrip = $_POST['deskripsi'];


$indexFoto = 0;


$kategori = $_POST['kategori'];



foreach($_FILES['foto']['name'] as $p){
	$sql1 = "INSERT INTO tb_foto_laundry VALUES('$getInt','$p')";
	move_uploaded_file($_FILES['foto']['tmp_name'][$indexFoto], $_SERVER['DOCUMENT_ROOT']."/Rebellion/foto/".$p);
	mysqli_query($conn, $sql1);
	$indexFoto++;
}


$a = "INSERT INTO tb_laundry VALUES ('', '$username', '$nama_laundry', '$alamat', '$password', '$email', '$deskrip', '$b', '$getInt', '$fDay', 'Aktif')";
$z = mysqli_query($conn, $a);


foreach($kategori as $key){
	$m = "INSERT INTO tb_detail_kategori VALUES ('$b','$key')";
	mysqli_query($conn, $m);	
}


header("location:../login.php");
	
?>