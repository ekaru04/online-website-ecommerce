<?php 

session_start();

include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($host, "SELECT * from admin WHERE user_admin='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	$_SESSION['user_admin'] = $username;
	header("location:index.php");
}else{
header("location:index.php?pesan=gagal");
}

?>