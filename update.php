<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$kategori = $_POST['kategori'];
$tgl = $_POST['tgl'];

mysqli_query($koneksi, "UPDATE tb_laundry SET nama_laundry='$nama', alamat='$alamat', email='$email', telp='$telp', id_detail_kategori='$kategori', expired='$tgl' WHERE id_laundry='$id'");

header("location:customer-account.php?pesan=update");

?>