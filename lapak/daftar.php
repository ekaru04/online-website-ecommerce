<?php

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';

$o = mysqli_query($conn, "SELECT * FROM tb_kategori");


?>


<html>
<!DOCTYPE html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="../index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Registrasi</h3>
	<form method="post" action="daftar_aksi.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Nama Laundry</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>
					<select name="kategori[]" multiple>
						<?php
						while($r = mysqli_fetch_assoc($o)){
							echo "<option value=".$r['id_kategori'].">".$r['jenis_kategori']."</option>";
						}
						
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Upload Gambar :</td>
				<td><input type="file" multiple name="foto[]">Upload!</input></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>