<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2></h2>
	<br/>
	<a href="#">KEMBALI</a>
	<br/>
	<br/>
	<h3>Pilih paket iklan dan upload bukti transfer disini</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama Lapak</td>
				<td><input type="text" name="nama" disabled ></td>
			</tr>
			<tr>
				<td>Paket Iklan</td>
				<td>
					<select>
						<option value="3bulan">350.000 - 3 Bulan</option>
						<option value="6bulan">600.000 - 6 Bulan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Upload Foto</td>
				<td><form action="aksi.php" method="post" enctype="multipart/form-data">
						<input type="file" name="file">
						<!-- <input type="submit" name="upload" value="Upload"> -->
					</form>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="upload" value="kirim"></td>
			</tr>		
		</table>
	</form>
</body>
</html>