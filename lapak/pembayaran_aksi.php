<?php
include $_SERVER['DOCUMENT_ROOT'].'/cic/connect.php';


$username = $_POST['username'];
$paket = $_POST['paket'];
$foto = $_FILES['foto']['name'];

$a = "INSERT INTO tb_trx VALUES ('','$username', '$paket', '$foto', 'Belum_Terkonfirmasi')";
$z = mysqli_query($conn, $a);

	
?>