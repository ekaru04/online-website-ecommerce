<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';

@session_start();
$sess = $_SESSION['username'];
$b = mysqli_fetch_array(mysqli_query($conn, "SELECT id_laundry, email from tb_laundry WHERE username = '$sess'"));
$id = $b['id_laundry'];
$email = $b['email'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Pass</title>
	<link rel="icon" href="images/icon.jpg" type="images/icon.jpg">
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
	<input type="text" name="id_laundry" readonly hidden  value="<?php echo $id; ?>">
	<input type="text" name="email" readonly hidden  value="<?php echo $email; ?>">
	old : <input type="password" name="oldPass"><br>
	Pass : <input type="password" name="newPass"><br>
	Retype : <input type="password" name="rePass"><br>

	<input type="submit" name="reset">


</form>
</body>
</html>