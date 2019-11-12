<?php 

$conn = mysqli_connect("localhost","root","","laundry");

if (mysqli_connect_errno()){
	echo "koneksi gagal : " . mysqli_connect_error();
}

?>