<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>Clean In Click</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

</head>
<body>
	<div class="judul">		
		<h1>CLEAN IN CLICK</h1>
		
	</div>
	
	<br/>
 
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post" enctype="multipart/form-data">
			
		<table>
		<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>				 	
			</tr>	
			<tr>
				<td>Nama_lapak</td>
				<td><input type="text" name="Nama_lapak"></td>				 	
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat"></td>					
			</tr>	
			<tr>
				<td>Kategori</td>
				<td><select name="Kategori" class="form-control form-control-sm">
				<option>Antar Jemput</option>
				<option>Tidak Antar Jemput</option>
				</select></td>					
			</tr>	<tr>
				<td>No Tlp</td>
				<td><input type="text" name="No_Tlp"></td>		<tr>
							
			</tr>	
				<td>Email</td>
				<td><input type="text" name="Email"></td>	
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi"></td>				 	
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>				 	
			</tr>	
				<td></td>		
				</tr>	<tr><td></td>
				<td><input type="file" name="foto"></td></tr>	<tr></tr>	<tr><td></td>
				<td><input type="submit" value="Simpan"> </td>					
			</tr>				
		</table>
	</form>
</body>
</html>