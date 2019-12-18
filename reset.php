<?php
@session_start();
if(@$_GET['id_laundry'] != null){
	$_SESSION['email'] = $_GET['email'];
	$_SESSION['id_laundry'] = $_GET['id_laundry'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Pass</title>
</head>
<body>

<?php
$msg = @$_GET['msg'];
if($msg == "berhasil"){
	echo "<h4>password telah diganti</h4>";
}else if($msg == "sama"){
	echo "<h4>password tidak sama</h4>";
}else if($msg == "sama2"){
	echo "<h4>password tidak tedaftar</h4>";
}
?>

<form method="post" action="changepass.php">
	<input type="text" name="id_laundry" readonly hidden  value="<?php echo $_SESSION['id_laundry']; ?>">
	<input type="text" name="email" readonly hidden  value="<?php echo $_SESSION['email']; ?>">
	old : <input type="password" name="oldPass"><br>
	Pass : <input type="password" name="newPass"><br>
	Retype : <input type="password" name="rePass"><br>

	<input type="submit" name="reset">


</form>
</body>
</html>