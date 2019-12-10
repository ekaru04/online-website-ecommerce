<?php 
include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/pendaftarandua/koneksi.php';

$getInt = mysqli_fetch_array(mysqli_query($host, "SELECT id_laundry FROM tb_laundry order by id_laundry desc"));

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

$indexFoto = 1 ;
echo "<pre>";
print_r($_FILES['foto']);
foreach($_FILES['foto']['name'] as $p){
// $ukuran_file = $_POST['foto']['size'];
// $path = "uploaded/".$p;

    
    // print_r($_FILES['foto']);
    // echo $_SERVER['DOCUMENT_ROOT']."/Rebellion/pendaftarandua/uploaded/".$p;    
    if($indexFoto < 5){
        $id = $getInt['id_laundry'] + 1;
        echo $id;
        $sql1 = "INSERT INTO tb_foto_laundry VALUES ('$id', '', '$p')";
        // echo "INSERT INTO tb_foto_laundry VALUES ('$getInt', '$p') <br>";
        // echo $sql1;
        move_uploaded_file($_FILES['foto']['tmp_name'][$indexFoto], $_SERVER['DOCUMENT_ROOT']."/Rebellion/pendaftarandua/uploaded/".$p);
        mysqli_query($host, $sql1);
    // if ($ukuran_file<= 2000000){
    //     if($indexFoto < 5){
    //         $id = $getInt['id_laundry'] + 1;
    //         echo $id;
    //         $sql1 = "INSERT INTO tb_foto_laundry VALUES ('$id', '', '$p')";
    //         // echo "INSERT INTO tb_foto_laundry VALUES ('$getInt', '$p') <br>";
    //         // echo $sql1;
    //         move_uploaded_file($_FILES['foto']['tmp_name'][$indexFoto], $_SERVER['DOCUMENT_ROOT']."/Rebellion/pendaftarandua/uploaded/".$p);
    //         mysqli_query($host, $sql1);


    }else{
        echo "foto tidak boleh melebihi 5";
    }
    $indexFoto++;
}

mysqli_query($host, "INSERT INTO tb_laundry(id_laundry, username, nama_laundry, alamat, password, email, deskripsi_laundry, id_detail_kategori, id_foto_laundry, expired) VALUES('', '$username', '$nama_laundry', '$alamat', '$password', '$email', '$deskripsi_laundry', '$kategori', '$getInt', '$fDay' )");
// echo "jumlahnya "+$indexFoto;
header("location:lapak.php?pesan=input");
if($indexFoto < 5){
}

?>