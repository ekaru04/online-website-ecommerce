<?php 
include 'koneksi.php';

$getInt = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_foto_laundry) FROM tb_foto_laundry"))[0];

$date = date("Ymd");
$day30 = strtotime($date . " + 1 months");
$fDay = date("Ymd", $day30);

$username = $_POST['username'];
$nama_laundry = $_POST['nama_laundry'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$email = $_POST['email'];
$deskripsi_laundry = $_POST['deskripsi_laundry'];
$kategori = $_POST['kategori'];

$indexFoto = 0 ;

foreach($_FILES['foto']['name'] as $p){
    $sql1 = "INSERT INTO tb_foto_laundry VALUES ('$getInt', '$p')";
    move_uploaded_file($_FILES['foto']['tmp_name']['$indexFoto'], $_SERVER['DOCUMENT_ROOT']."/pendaftarandua/uploaded/".$p);
    mysqli_query($conn, $sql1);
    $indexFoto++;
}

mysqli_query($host, "INSERT INTO tb_laundry VALUES('', '$username', '$nama_laundry', '$alamat', '$password', '$email', '$deskripsi_laundry', '$kategori', '$getInt', '$fDay', '' )");
$z = mysqli_query($conn, $a);
// $q = mysqli_query($host, "SELECT * FROM tb_laundry order by username desc");
// $data = mysqli_fetch_array($q);
// $username = $data['username'];
// mysqli_query($host, "UPDATE daftar set Nama_Lengkap='$Nama_Lengkap', Nama_Lapak='$Nama_Lapak', Alamat_Lapak='$Alamat_lapak', Kategori='$Kategori', Nomor_Telepon='$Nomor_Telepon', Email='$Email', Username='$Username', `Password`='$Password', `Deskripsi`='$Deskripsi' where id='$id'");
header("location:lapak.php?pesan=input");
?>