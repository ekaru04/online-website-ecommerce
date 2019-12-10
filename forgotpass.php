<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Pass</title>
</head>
<body>

<?php

$msg = @$_GET['pesan'];

if($msg == "sukses"){
	echo "<h4>Email telah terkirim</h4>";
}else if($msg == "gagal"){
	echo "<h4>Email gagal terkirim</h4>";
} 
?>


<form method="post" action="resetpass.php">
	email : <input type="email" name="email"><br>

	<input type="submit" name="submit">


</form>
</body>
</html>