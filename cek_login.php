<?php 

session_start();

include $_SERVER['DOCUMENT_ROOT'].'/distri/koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from tb_laundry where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	$_SESSION['username'] = $username;
	header("location:index2.php");
}else{
header("location:login.php?pesan=gagal");
}

?>