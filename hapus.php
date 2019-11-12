<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($host, "DELETE FROM registrasi_laundry  WHERE username  ='$id'")or die(mysql_error());

header("location:user.php?pesan=hapus");
?>