<?php

include $_SERVER['DOCUMENT_ROOT'].'/cic/connect.php';
session_start();

$sess = $_SESSION['username'];

$o = mysqli_query($conn, "SELECT * FROM tb_iklan");
$tu = mysqli_query($conn, "SELECT * FROM tb_laundry WHERE username='$sess'");

?>


<html>
<!DOCTYPE html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>Bayar Lur</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Registrasi</h3>
	<form method="post" action="pembayaran_aksi.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo mysqli_fetch_array($tu)['username'];?>" readonly></td>
			</tr>
			<tr>
				<td>Paket</td>
				<td>
					<select name="paket">
						<?php
						while($r = mysqli_fetch_assoc($o)){
							echo "<option value=".$r['id_iklan'].">".$r['durasi_iklan']."hari -".$r['harga_iklan']."</option>";
						}
						
						?>
					</select> 
				</td>
			</tr>
			<tr>
				<td>Upload Gambar :</td>
				<td><input type="file" name="foto">Upload!</input></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>