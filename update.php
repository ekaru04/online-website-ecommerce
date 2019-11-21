<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kategori = $_POST['kategori'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$tgl = $_POST['tgl'];

mysqli_query($koneksi,"UPDATE lapak SET nama='$nama', alamat='$alamat', kategori='$kategori', telp='$telp', email='$email', tgl='$tgl' WHERE id='$id'");

header("location:customer-account.php?pesan=update");

?>