<?php 

include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$kategori = $_POST['kategori'];
$tgl = $_POST['tgl'];


mysqli_query($conn, "UPDATE tb_laundry SET SET nama_laundry='$nama', alamat='$alamat', email='$email', no_telp='$no_telp' WHERE id_laundry='$id'");
mysqli_query($conn, "DELETE FROM tb_detail_kategori WHERE id_laundry='$id'");


foreach($kategori as $kategoriLoop){
	mysqli_query($conn, "INSERT INTO tb_detail_kategori VALUES('$id', '$kategoriLoop')");
}


//mysqli_query($koneksi, "UPDATE tb_laundry SET nama_laundry='$nama', alamat='$alamat', email='$email', no_telp='$no_telp', id_detail_kategori='$kategori', expired='$tgl' WHERE id_laundry='$id'");

header("location:customer-account.php?pesan=update");

?>