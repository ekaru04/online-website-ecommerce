<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	<br/>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Username</th>
			<th>Paket</th>
			<th>Foto Bukti</th>
			<th>Status</th>
		</tr>
		<?php 
		include $_SERVER['DOCUMENT_ROOT'].'/cic/connect.php';
		$no = 1;
		$data = mysqli_query($conn,"select *, tb_iklan.durasi_iklan as durasi from tb_trx JOIN tb_iklan ON tb_iklan.id_iklan = tb_trx.id_iklan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td> 
				<td><?php echo $d['id_iklan']; ?></td>
				<td><?php echo $d['foto_bukti']; ?></td>
				<td>
					<?php if($d['status'] == "Belum_Terkonfirmasi"){?>
					<a href="konfirmasi_aksi.php?id=
					<?php echo $d['username']; ?>
					&durasi=<?php echo $d['durasi']; ?>
					&id_trx=<?php echo $d['id_trx']; ?>">KONFIRMASI</a>
					<?php }else{ echo "Telah Terkonfirmasi"; } ?>
				</td>
			</tr>
			<?php } ?>
	</table>
</body>
</html>