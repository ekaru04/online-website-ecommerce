<?php 

include 'koneksi.php';
$id = $_POST['id_laundry'];
$nama = $_POST['nama_laundry'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$kategori = $_POST['id_detail_kategori'];
$tgl = $_POST['expired'];

mysqli_query($koneksi,"UPDATE tb_laundry SET nama_laundry='$nama', alamat='$alamat', email='$email', telp='$telp', id_detail_kategori='$kategori', expired='$tgl' WHERE id_laundry='$id'");

header("location:customer-account.php?pesan=update");

?>