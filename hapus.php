<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($host, "DELETE FROM tb_laundry WHERE id_laundry ='$id'")or die(mysql_error());
mysqli_query($host, "DELETE FROM tb_detail_kategori WHERE id_laundry='$id'");

header("location:user.php?pesan=hapus");
?>