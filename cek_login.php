<?php 

session_start();

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "select * from tb_laundry where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	$_SESSION['username'] = $username;
	header("location:index.php");
}else{
header("location:index.php?pesan=gagal");
}

?>