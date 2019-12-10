<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';

if(isset($_POST['reset'])){

	$id = $_POST['id_laundry'];
	$email = $_POST['email'];

	$oldPass = $_POST['oldPass'];
	$newPass = $_POST['newPass'];
	$rePass = $_POST['rePass'];

	$sel = "SELECT * FROM tb_laundry WHERE id_laundry = '$id' AND email = '$email'";
	$result = mysqli_query($conn, $sel);
	$data = mysqli_fetch_array($result);
	$pass = $data['password'];

	if($oldPass == $pass){
		if($newPass == $rePass){
			$update = "UPDATE tb_laundry SET password='$newPass' WHERE email='$email' AND id_laundry='$id'";
			$result2 = mysqli_query($conn, $update);
			if($result2){
				header("location:reset.php?msg=berhasil");
			}
		}else{
			header("location:reset.php?msg=sama");
		}
	}else{
		header("location:reset.php?msg=sama2");
	}

}


?>