<?php

// fungsi include untuk menyertakan file php lain ke dalam suatu program php
include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/pendaftarandua/koneksi.php'; 

$getInt = mysqli_fetch_array(mysqli_query($host, "SELECT id_laundry FROM tb_laundry order by id_laundry desc"));

$date = date("Ymd");
$day30 = strtotime($date . " + 1 months");
$fDay = date("Ymd", $day30);

// membuat variabel sesuai di dalam database
$username = $_POST['username'];
$nama_laundry = $_POST['nama_laundry'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$deskripsi_laundry = $_POST['deskripsi_laundry'];
// $kategori = $_POST['kategori'];
echo "<pre>";
$id = $getInt['id_laundry'] + 1;
print_r($_POST); 
foreach ($_POST['id_detail_kategori'] as $key) {
    mysqli_query($host, "INSERT INTO tb_detail_kategori(id_laundry, id_kategori) VALUES('$id', '$key')");
}
$indexFoto = 1 ;
foreach($_FILES['foto']['name'] as $p){
    if($indexFoto < 6){
        echo $id;
        $sql1 = "INSERT INTO tb_foto_laundry VALUES ('$id', '', '$p')";
        move_uploaded_file($_FILES['foto']['tmp_name'][$indexFoto], $_SERVER['DOCUMENT_ROOT']."/Rebellion/pendaftarandua/uploaded/".$p);
        mysqli_query($host, $sql1);
     
    }else{
        echo '<script type="text/javascript">
        alert("foto tidak boleh melebihi 5");
        </script>';
    }
    $indexFoto++;


mysqli_query($host, "INSERT INTO tb_laundry(id_laundry, username, nama_laundry, alamat, password, email, no_telp, deskripsi_laundry, id_detail_kategori, id_foto_laundry, expired) VALUES('', '$username', '$nama_laundry', '$alamat', '$password', '$email', '$no_telp', '$deskripsi_laundry', '$kategori', '$getInt', '$fDay' )");

header("location:lapak.php?pesan=input");
// if($indexFoto < 6){
// 
// }
}

?>